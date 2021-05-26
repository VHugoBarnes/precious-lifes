@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">EDITA DIRECCIÓN</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('editar-direccion') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Colonia</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="colonia" value={{ $direccion->colonia }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Calle</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="calle" value={{ $direccion->calle }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Número</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="numero" value={{ $direccion->numero }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Localidad</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="localidad" value={{ $direccion->localidad }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Estado</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="estado" value={{ $direccion->estado }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">País</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pais" value={{ $direccion->pais }} required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Código postal</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cp" value={{ $direccion->cp }} required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Actualizar" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection