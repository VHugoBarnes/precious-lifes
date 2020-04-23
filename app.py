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

        cur = mysql.connection.cursor()
        comprobacion = cur.execute("SELECT correo_usuario FROM usuario WHERE correo_usuario LIKE %s", [email])
        
        print(comprobacion)
        respuesta = ""

        if not comprobacion:
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
        else:
            # Si el usuario ya existe no insertarlo de nuevo.
            respuesta = "Ya existe una cuenta con ese correo."

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

        print(username)
        print(direccion)
        print(num_tarjeta)
        print(email)
        print(password)
        print(password_confirmation)

        return 'veterinario registrado con éxito'
    
if __name__ == '__main__':
    
    app.run(port=3000, debug=True)
