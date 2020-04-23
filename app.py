# coding: utf-8

from flask import Flask, render_template, request
from flask_mysqldb import MySQL

app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'preciouslifes'

@app.route('/')
def index():
    return render_template('index.html')


@app.route('/registrarse')
def registrarse():
    return render_template('registrarse.html')


@app.route('/registro', methods=['POST'])
def registro():


if __name__ == '__main__':
    
    app.run(port=3000, debug=True)
