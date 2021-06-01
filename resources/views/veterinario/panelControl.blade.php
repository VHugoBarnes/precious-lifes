@extends('layouts.app')

@section('content')
<section class="text-center mt-5 pt-5">
    <div class="card mb-5 mx-5 mt-5 pt-5">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="https://www.tenforums.com/geek/gars/images/2/types/thumb_15951118880user.png" alt="profile pic" width="240px">
        </div>
        <div class="col-md-8 text-start">
          <div class="mb-2">
            <h2>{{ $veterinario->nombre_establecimiento }}</h2>
            <h4>Nombre del propietario: {{ $veterinario->nombre_propietario }}</h4>
          </div>
          <a href="{{ route('editar-direccion') }}" class="btn btn-primary d-block mb-1">Editar dirección</a>
          <a href="{{ route('editar-cuenta') }}" class="btn btn-success d-block">Editar cuenta de banco</a>
        </div>
      </div>
    </div>
    <h1 class="section-heading text-uppercase mb-3">Animalitos registrados</h1>
    @foreach ($animales as $animal)
    <div class="card mb-3 mx-5" style="max-width: auto;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="{{ route('image.file', ['filename' => $animal->imagen]) }}" alt="..." style="min-width: 240px; max-width: 300px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title text-start">{{ $animal->nombre }}</h2>
              <p class="card-text text-start">{{ $animal->descripcion }}</p>
              <p class="card-text text-start"><b>Condición:</b> {{ $animal->condicion }}</p>
              <p class="card-text text-start"><b>Necesita de:</b> {{ $animal->necesita }}</p>
              <p class="card-text text-start"><b>Monto a recaudar:</b> ${{ $animal->fondos }}</p>
              <div class="text-start pt-3 d-flex justify-content-start">
                <form action="{{ route('eliminar-animal', ['id' => $animal->id]) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <p class="mx-2"><a href="{{ route('editar-animal', ['id'=>$animal->id]) }}" class="btn btn-warning ml-3">Actualizar</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</section>
@endsection