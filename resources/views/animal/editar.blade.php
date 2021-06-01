@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">EDITA TUS DATOS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('editar-animal', ['id' => $animal->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre" id="nombre" value="{{ $animal->nombre }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Foto del animalito</div>
                            <div class="value">
                                <input class="input--style-6" type="file" name="imagen" placeholder="Foto">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Descripción</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="descripcion" id="descripcion" value="{{ $animal->descripcion }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Condición</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="condicion" id="condicion" value="{{ $animal->condicion }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Necesita</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="necesita" id="necesita" value="{{ $animal->necesita }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Cantidad a recaudar</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="fondos" id="fondos" value="{{ $animal->fondos }}" required>
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