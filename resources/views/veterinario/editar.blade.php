<form action="{{ route('editar-veterinario') }}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ Auth::user()->nombre }}">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="{{ Auth::user()->apellidos }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}">

    <label for="rfc">RFC</label>
    <input type="text" name="rfc" id="rfc" value="{{ $veterinario->rfc }}">

    <label for="nombre_establecimiento">Nombre establecimiento</label>
    <input type="text" name="nombre_establecimiento" id="nombre_establecimiento" value="{{ $veterinario->nombre_establecimiento }}">

    <input type="submit" value="Actualizar datos">

</form>