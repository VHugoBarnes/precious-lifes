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
            <h2>{{ $usuario->nombre }} {{ $usuario->apellidos }}</h2>
            <h4>{{ $usuario->email }}</h4>
          </div>
          <a href="{{ route('editar-usuario') }}" class="btn btn-primary d-block mb-1">Editar datos</a>
        </div>
      </div>
    </div>
    <h1 class="section-heading text-uppercase mb-3">Animalitos registrados</h1>
    @foreach ($transacciones as $transaccion)
    <div class="card mb-3 mx-5" style="max-width: auto;">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="{{ route('image.file', ['filename' => $transaccion->animal->imagen]) }}" alt="..." style="max-width: 140px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title text-start">{{ $transaccion->animal->nombre }}</h2>
              <h3 class="card-title text-start">Veterinaria: {{ $transaccion->animal->veterinario->nombre_establecimiento }}</h3>
              <h4 class="card-text text-start">Donado: <b>${{ $transaccion->monto }}</b></h4>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</section>
@endsection