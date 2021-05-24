@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">REGISTRA TU DIRECCIÓN</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dar-alta') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Colonia</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="colonia" placeholder="Ej. Praderas" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Calle</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="calle" placeholder="Ej. Roberto Guerra" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Número</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="numero" placeholder="Ej. 7" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Localidad</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="localidad" placeholder="Ej. Matamoros" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Estado</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="estado" placeholder="Ej. Tamaulipas" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">País</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pais" placeholder="Ej. México" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Código postal</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cp" placeholder="Ej. 87470" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Registrar" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection