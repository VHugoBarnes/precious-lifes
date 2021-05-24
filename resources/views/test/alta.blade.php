@extends('layouts.formularios')

@section('formulario')
<div class="wrapper wrapper--w900">
    <div class="card card-6">
        <div class="card-heading">
            <h2 class="title">REGISTRO PARA DAR DE ALTA A UN ANIMALITO</h2>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-row">
                    <div class="name">Nombre</div>
                    <div class="value">
                        <input class="input--style-6" type="text" name="Nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Estado de salud</div>
                    <div class="value">
                        <div class="input-group">
                            <input class="input--style-6" type="email" name="email" placeholder="Bien, mal, estable, necesita cuidado, etc...">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Descripción</div>
                    <div class="value">
                        <div class="input-group">
                            <textarea class="textarea--style-6" name="message" placeholder="Escribe la breve historia del animalito."></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Cantidad a recaudar</div>
                    <div class="value">
                        <input class="input--style-6" type="text" name="full_name" placeholder="¿Cuánto dinero necesita recaudar el animalito?">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button class="btn btn--radius-2 btn--blue-2" href="{{url('iniciarsesion')}}" type="submit">Dar de alta</button>
        </div>
    </div>
</div>
@endsection