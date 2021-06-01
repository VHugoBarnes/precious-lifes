@extends('layouts.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Se parte del apoyo en esterilizar animalitos sin hogar</div>
            <div class="masthead-heading text-uppercase">PRECIOUS LIFES</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Quiero ayudar</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">¿CÓMO DONAR?</h2>
                <h3 class="section-subheading text-muted">Conoce el proceso para ayudar</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Elige el animalito</h4>
                    <p class="text-muted">En nuestra lista de animalitos que necesitan ayuda, puedes escoger el animalito
                        que más te sea accecible brindarle donación.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Métodos de pago</h4>
                    <p class="text-muted">Manejamos diferentes pasarelas de pago para que no te quedes sin la oportunidad de
                        poder ayudar.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">¡Listo!</h4>
                    <p class="text-muted">Después de hacer tu donación, vas a estar recibiendo correos de noticias acerca
                        del seguimiento y cuidado del animalito que ayudaste.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
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
                            <a class="portfolio-link" data-bs-toggle="modal" {{-- href="{{ route('animal', ['id' => $animal->id]) }}"> --}}
                                href="#portfolioModal{{ $animal->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ route('image.file', ['filename' => $animal->imagen]) }}"
                                    alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Conoce a {{ $animal->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">Monto a recaudar:
                                    ${{ $animal->fondos }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">¿QUIÉNES SOMOS?</h2>
                <h3 class="section-subheading text-muted">Un grupo de estudiantes que simplemente quieren que el mundo ayude
                    a los animalitos que no tienen palabra. SEAMOS SU VOZ DE AUXILIO.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Animalitos sin hogar</h4>
                            <h4 class="subheading">necesitan nuestra ayuda</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Existe mucha sobrepoblación de perros y gatos en las calles, esto es
                                debido a que sufren de abandono y rechazos. Al estar ellos sin destino alguno, provoca que
                                se procreen sin bajo la autoridad de un responsable.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Justificación</h4>
                            <h4 class="subheading">para ayudar</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">México abandona al 70% de sus mascotas, es el primer lugar en
                                Latinoamérica de animales en situación de calle y de ellos, al menos 10 millones (62%) no
                                están esterilizados.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Equipo</h4>
                            <h4 class="subheading">"Asgardianos de la Galaxia"</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nuestra idea nació con el propósito de hacer un cambio en el mundo para
                                los animalitos que necesitan ayuda y no tienen voz. HAY QUE HACER EL CAMBIO.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Por tales motivos nace</h4>
                            <h4 class="subheading">"PRECIOS LIFES"</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Plataforma que permite a las personas interesadas donar monetariamente a
                                veterinarias y clínicas que estén especializadas en el cuidado y resguardamiento de los
                                animalitos.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            ¡Se Parte
                            <br />
                            De Nuestra
                            <br />
                            Historia!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">EQUIPO "PRECIOUS LIFES"</h2>
                <h3 class="section-subheading text-muted">CONOCE A CADA MIEMBRO DEL EQUIPO.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Fulanito 1</h4>
                        <p class="text-muted">Diseñaodor</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Fulanita 2</h4>
                        <p class="text-muted">Marketing</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Fulanito 3</h4>
                        <p class="text-muted">Líder desarrollador</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Es un equipo que busca ayudar a los animalitos sin fines de lucro, es solo
                        ayudarlos para que puedan vivir más años, sean felices y si es posible, encuentren familia :)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contáctanos</h2>
                <h3 class="section-subheading text-muted">Comparte tus opiniones.</h3>
            </div>
            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Tu nombre *"
                                required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Tu correo *"
                                required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Tu número *"
                                required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Tu mensaje *"
                                required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar
                        mensaje</button>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Portfolio Modals-->
    @foreach ($animales as $animal)
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $animal->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" />
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CONOCE A {{ $animal->nombre }}</h2>
                                    <p class="item-intro text-muted">Listo para recibir tu ayuda</p>
                                    <img class="img-fluid d-block mx-auto"
                                        src="{{ route('image.file', ['filename' => $animal->imagen]) }}" alt="..." />
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
                                    <a class="btn btn-primary btn-xl text-uppercase"
                                        href="{{ route('donar', ['id' => $animal->id]) }}">
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
