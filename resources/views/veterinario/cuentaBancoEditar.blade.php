@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">AÑADE TU CUENTA BANCARIA</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('editar-cuenta') }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre del propietario</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre_propietario" value="{{ $cuenta->nombre_propietario }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Número de cuenta</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="numero_cuenta" value="{{ $cuenta->numero_cuenta }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Banco</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="banco" value="{{ $cuenta->banco }}" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Registrar cuenta" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection