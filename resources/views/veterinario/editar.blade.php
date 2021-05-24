@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">EDITA TUS DATOS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('editar-veterinario') }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre" id="nombre" value="{{ Auth::user()->nombre }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Apellidos</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="apellidos" id="apellidos" value="{{ Auth::user()->apellidos }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <input class="input--style-6" type="email" name="email" id="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">RFC</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="rfc" id="rfc" value="{{ $veterinario->rfc }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nombre establecimiento</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre_establecimiento" id="nombre_establecimiento" value="{{ $veterinario->nombre_establecimiento }}" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Actualizar datos" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection