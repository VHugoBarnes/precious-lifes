@extends('layouts.app')

@section('content')
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center mt-5 pt-5">
                <h2 class="section-heading text-uppercase">AYUDA</h2>
                <h3 class="section-subheading text-muted">Animalitos listos para recibir tu ayuda.</h3>
            </div>
            <div class="row">
                @foreach ($animales as $animal)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" {{-- href="{{ route('animal', ['id' => $animal->id]) }}"> --}} href="#portfolioModal{{ $animal->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ route('image.file', ['filename' => $animal->imagen]) }}"
                                    alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Conoce a {{ $animal->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">Monto a recaudar: ${{ $animal->fondos }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($animales as $animal)
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $animal->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">CONOCE A {{ $animal->nombre }}</h2>
                                <p class="item-intro text-muted">Listo para recibir tu ayuda</p>
                                <img class="img-fluid d-block mx-auto" src="{{ route('image.file', ['filename' => $animal->imagen]) }}" alt="..." />
                                <h4>Descripción</h4>
                                <p>{{ $animal->descripcion }}</p>
                                <hr>
                                <h4 class="pt-4">Necesita de:</h4>
                                <p>{{ $animal->necesita }}</p>
                                <hr>
                                <h4 class="pt-4">Monto a recaudar</h4>
                                <p>${{ $animal->fondos }}</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Hobbies:</strong>
                                        Correr en el patio, jugar con pelotas y nadar.
                                    </li>
                                    <li>
                                        <strong>Edad de:</strong>
                                        3 años.
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('donar', ['id' => $animal->id]) }}">
                                    Donar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
