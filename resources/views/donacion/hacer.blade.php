@extends('layouts.formularios')

@section('formulario')
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">HAZ UNA DONACIÓN A: {{ $animal->nombre }} | Cantidad necesitada: ${{ $animal->fondos }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('donar', ['id' => $animal->id]) }}">
                        @csrf
                        
                        <div class="form-row">
                            <div class="name">Monto</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="monto" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="Realizar donación" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection