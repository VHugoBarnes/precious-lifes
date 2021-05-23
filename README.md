# Precious Lifes
Repositorio oficial del proyecto precious lifes.

# Como contribuir
1. Primero que nada tienes que asegurarte que te haya añadido como colaborador.
2. Instalar composer. [Lo puedes descargar aquí](https://getcomposer.org/download/), buscar el instalador para Windows, es cuestión de darle siguiente y siguiente.
3. Tener instalado Node.js. [Lo puedes descargar aquí](https://nodejs.org/en/).
4. Tener instalado git en tu máquina local. [Lo puedes descargar aquí](https://git-scm.com/)
    1. Una vez instalado git (asumiendo que estás usando Windows) abre git bash (es una terminal hecha para git) y escribe los siguientes comandos reemplazandolo con tus datos: `git config --global user.email "tucorreo@mail.com"` `git config --global user.name "Tu Nombre Completo". El correo con el que te registraste en GitHub debe ser el mismo que coloques en la terminal.
    2. Las extensiones de PHP necesarias para activar son `OpenSSL`, `PDO`, `mbstring`, `tokenizer`, `xml`, `ctype`, `json`, `curl`.
5. Dirigete a la carpeta donde quieras tener alojado el proyecto (de preferencia donde tengas instalado tu servidor Apache o nginx, o sea en la carpeta www en caso de que tengas AppServ, XAMPP, etc) y escribe el siguiente comando dentro de dicha carpeta `git clone https://github.com/VHugoBarnes/precious-lifes.git`.
6. Dirigete a la carpeta del repositorio, y ejecuta: `composer install`, `npm install`, `cp .env.example .env`, `php artisan key:generate`.
7. Crea una base de datos en MySQL llamada `precious_lifes`.
8. Edita el archivo `.env` con los datos de la base de datos en MySQL (líneas 13 a 15).
9. Corre las migraciones con el comando `php artisan migrate:fresh`.

# Funciones que realiza
- Registro e inicio de sesión de usuarios.
- Vista para cambiar datos de usuario.
- Veterinarios dan de alta animales.
- Vista para ver animales.
- Vista para ver un solo animal.
- Ruta para donar (Recoge datos bancarios).