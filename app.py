# coding: utf-8

from flask import Flask, render_template, request, session, redirect, url_for, jsonify
from flask_mysqldb import MySQL
from flask_bcrypt import generate_password_hash, check_password_hash
from markupsafe import escape

import time
import datetime

import re

# Declaraciones necesarias para iniciar el server
app = Flask(__name__)
app.secret_key = b'\xc0\xedv\x1a\x169\xb9\xb5\xa2\xe8a+\xe3\x8f\x9a\x9e'
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'preciouslifes'
mysql = MySQL(app)


def datos_sesion():

    nombre_usuario = ''
    num_tarjeta = ''
    fecha_registro = ''

    # Sesion iniciada
    if 'email' in session:
        sesion_iniciada = True
    else:
        sesion_iniciada = False

    if 'tipo_usuario' in session:
        cur = mysql.connection.cursor()
        if session['tipo_usuario'] == 'normal':

            tipo_usuario = 'normal'
            cur.execute("SELECT nombre_usuario FROM usuario WHERE correo_usuario LIKE %s", [session['email']])
            query = cur.fetchall()
            nombre_usuario = query[0]

            cur.execute("SELECT numero_tarjeta FROM usuario WHERE correo_usuario LIKE %s", [session['email']])
            query2 = cur.fetchall()
            num_tarjeta = query2[0]

            cur.execute("SELECT fecha_registro_usuario FROM usuario WHERE correo_usuario LIKE %s", [session['email']])
            query3 = cur.fetchall()
            fecha_registro = query3[0]

        elif session['tipo_usuario'] == 'veterinario':

            tipo_usuario = 'veterinario'
            cur.execute("SELECT nombre_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [session['email']])
            query = cur.fetchall()
            nombre_usuario = query[0]

            cur.execute("SELECT numero_tarjeta FROM veterinario WHERE correo_veterinario LIKE %s", [session['email']])
            query2 = cur.fetchall()
            num_tarjeta = query2[0]

            cur.execute("SELECT fecha_registro_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [session['email']])
            query3 = cur.fetchall()
            fecha_registro = query3[0]
    else:
        tipo_usuario = ''

    datos = {
        "sesion_iniciada": sesion_iniciada,
        "tipo_usuario": tipo_usuario,
        "nombre_usuario": nombre_usuario,
        "num_tarjeta": num_tarjeta,
        "fecha_registro": fecha_registro,
    }

    return datos


@app.route('/')
def index():
    #session.pop('email', None)
    datos = datos_sesion()
    return render_template('index.html', **datos)


@app.route('/registrarse')
def registrarse():
    return render_template('registrarse.html')     


@app.route('/registro_usuario', methods=['POST'])
def registro_usuario():
    if request.method == 'POST':

        username = request.form['username']
        num_tarjeta = request.form['numtarjeta']
        email = request.form['email']
        password = request.form['password']
        password_confirmation = request.form['password2']

        respuesta = ""
        cur = mysql.connection.cursor()

        # Validaciones
        comprobacion_usuario = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
        comprobacion_veterinario = cur.execute("SELECT correo_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])
        comprobacion_ncuenta_usuario = cur.execute("SELECT numero_tarjeta FROM usuario WHERE numero_tarjeta LIKE %s", [num_tarjeta])
        comprobacion_ncuenta_veterinario = cur.execute("SELECT numero_tarjeta FROM veterinario WHERE numero_tarjeta LIKE %s", [num_tarjeta])
        
        if not comprobacion_usuario and not comprobacion_veterinario and not comprobacion_ncuenta_usuario and not comprobacion_ncuenta_veterinario:
            # Si el correo y numero de cuenta no existe ya en otro tipo de usuario

            if password == password_confirmation:
                # Si las contraseñas coinciden
                # Las contraseñas coinciden, ahora a evaluar las restricciones

                if re.fullmatch(r"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,30}$", password):

                    # timestamp
                    ts = time.time()
                    timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                    contrasena = generate_password_hash(password, 12)
                    cur.execute("INSERT INTO usuario(nombre_usuario, numero_tarjeta, fecha_registro_usuario, correo_usuario, contraseña_usuario) VALUES(%s,%s,%s,%s,%s)",
                    (username, num_tarjeta, timestamp, email, contrasena))
                    mysql.connection.commit()
                    respuesta = "Usuario registrado exitosamente"
                else:
                    respuesta = "La contraseña debe contener de 8 a 30 caracteres, al menos un numero y sin signos especiales"
            
            else:
                respuesta = "Las contraseñas no coinciden"

        elif comprobacion_veterinario:
            # Si el usuario ya existe en como otro tipo de usuario
            respuesta = "El usuario ya se encuentra registrado como veterinario."
        
        elif comprobacion_ncuenta_usuario or comprobacion_ncuenta_veterinario:
            # Si el número de cuenta ya existe en la base de datos.
            respuesta = "Ya existe una cuenta con ese número de tarjeta."

        else:
            # Si el usuario ya existe no insertarlo de nuevo.
            respuesta = "El usuario ya se encuentra registrado como usurario normal."

        return respuesta


@app.route('/registro_veterinario', methods=['POST'])
def registro_veterinario():
    if request.method == 'POST':

        username = request.form['username']
        direccion = request.form['direccion']
        num_tarjeta = request.form['numtarjeta']
        email = request.form['email']
        password = request.form['password']
        password_confirmation = request.form['password2']

        respuesta = ''
        cur = mysql.connection.cursor()

        # Validaciones
        comprobacion_veterinario = cur.execute("SELECT correo_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])
        comprobacion_usuario = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
        comprobacion_ncuenta_usuario = cur.execute("SELECT numero_tarjeta FROM usuario WHERE numero_tarjeta LIKE %s", [num_tarjeta])
        comprobacion_ncuenta_veterinario = cur.execute("SELECT numero_tarjeta FROM veterinario WHERE numero_tarjeta LIKE %s", [num_tarjeta])

        if not comprobacion_veterinario and not comprobacion_usuario and not comprobacion_ncuenta_usuario and not comprobacion_ncuenta_veterinario:
            # Si el correo y numero de cuenta no existe ya en otro tipo de usuario

            if password == password_confirmation:
                # Si la contraseña no es igual a la confirmación.
                # Las contraseñas coinciden, ahora a evaluar las restricciones

                if re.fullmatch(r"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,30}$", password):
                    ts = time.time()
                    timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
                    contrasena = generate_password_hash(password, 12)
                    cur.execute("INSERT INTO veterinario(nombre_veterinario, direccion_veterinario, fecha_registro_veterinario, numero_tarjeta, correo_veterinario, contraseña_veterinario) VALUES(%s, %s, %s, %s, %s, %s)",
                    (username, direccion, timestamp, num_tarjeta, email, contrasena))
                    mysql.connection.commit()
                    respuesta = "Veterinario registrado exitosamente"
                else:
                    respuesta = "La contraseña debe contener de 8 a 30 caracteres, al menos un numero y sin signos especiales"
            
            else:
                respuesta = "Las contraseñas no coinciden"

        elif comprobacion_usuario:
            # Si el usuario ya existe en como otro tipo de usuario.
            respuesta = "El usuario ya se encuentra registrado como usuario normal."

        elif comprobacion_ncuenta_usuario or comprobacion_ncuenta_veterinario:
            # Si el número de cuenta ya existe en la base de datos.
            respuesta = "Ya existe una cuenta con ese número de tarjeta."
        
        else:
            # Si el usuario ya existe no insertarlo de nuevo.
            respuesta = "El usuario ya se encuentra registrado como veterinario"

        return respuesta


@app.route('/iniciar_sesion', methods=['GET', 'POST'])
def iniciar_sesion():
    if request.method == 'POST':
        email = request.form['email']
        password = request.form['password']
        
        cur = mysql.connection.cursor()

        comprobar_email_normal = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
        comprobar_email_veterinario = cur.execute("SELECT correo_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])

        # Comprobaciones
        # Comprobación usuario
        if comprobar_email_normal:
            # Si se encuentra el correo en la tabla usuario
            # Comprobar si las contraseñas encriptadas coinciden
            comprobar_password_normal = cur.execute("SELECT contraseña_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
            query = cur.fetchall()
            pass_normal = query[0]
            if check_password_hash(pass_normal[0], password):
                # El correo y contraseña coinciden, pasa a guardarse la sesión
                session['email'] = email
                session['tipo_usuario'] = 'normal'
                return redirect(url_for('perfil'))
            else:
                # Las contraseñas no coinciden
                return 'Las contraseña no coincide'
        # Comprobación veterinario
        elif comprobar_email_veterinario:
            # Si se encuentra el correo en la tabla usuario
            # Comprobar si las contraseñas encriptadas coinciden
            comprobar_password_veterinario = cur.execute("SELECT contraseña_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])
            query = cur.fetchall()
            pass_veterinario = query[0]
            if check_password_hash(pass_veterinario[0], password):
                session['email'] = email
                session['tipo_usuario'] = 'veterinario'
                return redirect(url_for('perfil'))
            else:
                # Las contraseñas no coinciden
                return 'La contraseña no coincide'

        elif not comprobar_email_normal and not comprobar_email_veterinario:
            # No se encontró el email en ninguna tabla
            return 'El correo no se encuentra registrado en nuestra base de datos'

    return render_template('iniciarsesion.html')


@app.route('/perfil')
def perfil():
    if 'email' in session:
        return 'Iniciado sesión con el correo: %s' % escape(session['email'])
    return 'No has iniciado sessión'


@app.route('/cerrar_sesion')
def cerrar_sesion():
    # Eliminar el correo y tipo de usuario de la sesión si están
    session.pop('email', None)
    session.pop('tipo_usuario', None)
    return redirect(url_for('index'))


if __name__ == '__main__':
    
    app.run(port=3000, debug=True)
