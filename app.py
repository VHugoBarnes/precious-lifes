# coding: utf-8

from flask import Flask, render_template, request
from flask_mysqldb import MySQL

import time
import datetime

app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'preciouslifes'
mysql = MySQL(app)

@app.route('/')
def index():
    return render_template('index.html')


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

        comprobacion_usuario = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
        comprobacion_veterinario = cur.execute("SELECT correo_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])
        
        if not comprobacion_usuario and not comprobacion_veterinario:
            # Si el usuario no existe, insertarlo.

            if password == password_confirmation:
                # Si las contraseñas coinciden

                # timestamp
                ts = time.time()
                timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')

                cur.execute("INSERT INTO usuario(nombre_usuario, numero_tarjeta, fecha_registro_usuario, correo_usuario, contraseña_usuario) VALUES(%s,%s,%s,%s,%s)",
                (username, num_tarjeta, timestamp, email, password))
                mysql.connection.commit()
                respuesta = "Usuario registrado exitosamente"
            else:
                respuesta = "Las contraseñas no coinciden"
        elif comprobacion_veterinario:
            # Si el usuario ya existe en como otro tipo de usuario
            respuesta = "El usuario ya se encuentra registrado como veterinario."
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

        comprobacion_veterinario = cur.execute("SELECT correo_veterinario FROM veterinario WHERE correo_veterinario LIKE %s", [email])
        comprobacion_usuairo = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])

        if not comprobacion_veterinario and not comprobacion_usuairo:
            # Si el usuario no existe como usuario tipo veterinario o normal

            if password == password_confirmation:
                # Si la contraseña no es igual a la confirmación.
                ts = time.time()
                timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')

                cur.execute("INSERT INTO veterinario(nombre_veterinario, direccion_veterinario, fecha_registro_veterinario, numero_tarjeta, correo_veterinario, contraseña_veterinario) VALUES(%s, %s, %s, %s, %s, %s)",
                (username, direccion, timestamp, num_tarjeta, email, password))
                mysql.connection.commit()
                respuesta = "Veterinario registrado exitosamente"
            else:
                respuesta = "Las contraseñas no coinciden"
        elif comprobacion_usuairo:
            # Si el usuario ya existe en como otro tipo de usuario
            respuesta = "El usuario ya se encuentra registrado como usuario normal."
        else:
            # Si el usuario ya existe no insertarlo de nuevo.
            respuesta = "El usuario ya se encuentra registrado como veterinario"

        return respuesta
    
if __name__ == '__main__':
    
    app.run(port=3000, debug=True)
