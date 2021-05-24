@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">REGISTRO PARA DAR DE ALTA A UN ANIMALITO</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dar-alta') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Foto del animalito</div>
                            <div class="value">
                                <input class="input--style-6" type="file" name="imagen" placeholder="Foto" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Descripción</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="descripcion" placeholder="Escribe la breve historia del animalito."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Estado de salud</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="condicion" placeholder="Bien, mal, estable, necesita cuidado, etc..." required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Necesita de: </div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="necesita" placeholder="Escribe la breve historia del animalito."></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Cantidad a recaudar</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="fondos" placeholder="¿Cuánto dinero necesita recaudar el animalito?" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Dar de alta" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection