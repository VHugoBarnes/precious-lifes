<form action="{{ route('editar-usuario') }}" method="POST">
    @csrf
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ Auth::user()->nombre }}">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="{{ Auth::user()->apellidos }}">

    <label for="username">Nombre de usuario</label>
    <input type="text" name="username" id="username" value="{{ Auth::user()->username }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}">

    <input type="submit" value="Actualizar datos">

</form>