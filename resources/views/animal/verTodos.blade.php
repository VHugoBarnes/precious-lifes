@extends('layouts.app')

@section('content')
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">AYUDA</h2>
                <h3 class="section-subheading text-muted">Animalitos listos para recibir tu ayuda.</h3>
            </div>
            <div class="row">
                @foreach ($animales as $animal)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link"
                                href="{{ route('animal', ['id' => $animal->id]) }}">
                                <img class="img-fluid" src="{{ route('image.file', ['filename' => $animal->imagen]) }}"
                                    alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Conoce a {{ $animal->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">Listo para recibir tu ayuda</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
