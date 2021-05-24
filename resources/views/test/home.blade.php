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
                <p class="text-muted">En nuestra lista de animalitos que necesitan ayuda, puedes escoger el animalito que más te sea accecible brindarle donación.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Métodos de pago</h4>
                <p class="text-muted">Manejamos diferentes pasarelas de pago para que no te quedes sin la oportunidad de poder ayudar.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">¡Listo!</h4>
                <p class="text-muted">Después de hacer tu donación, vas a estar recibiendo correos de noticias acerca del seguimiento y cuidado del animalito que ayudaste.</p>
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
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/perrito1.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Conoce a Max</div>
                        <div class="portfolio-caption-subheading text-muted">Listo para recibir tu ayuda</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/perrito2.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Conoce a Deysi</div>
                        <div class="portfolio-caption-subheading text-muted">Ella quiere ser feliz</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/gatito3.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Conoce a Keko</div>
                        <div class="portfolio-caption-subheading text-muted">Juguetón y chiquito</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/gatito4.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Conoce a Layla</div>
                        <div class="portfolio-caption-subheading text-muted">Tranquila, amable y juguetona</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/perrito5.jpeg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Ella es Dolly</div>
                        <div class="portfolio-caption-subheading text-muted">Lista para recibir tu ayuda</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/gatito6.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Coocki "El Travieso"</div>
                        <div class="portfolio-caption-subheading text-muted">Solo espera recibir tu ayuda para seguir de diablillo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">¿QUIÉNES SOMOS?</h2>
            <h3 class="section-subheading text-muted">Un grupo de estudiantes que simplemente quieren que el mundo ayude a los animalitos que no tienen palabra. SEAMOS SU VOZ DE AUXILIO.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Animalitos sin hogar</h4>
                        <h4 class="subheading">necesitan nuestra ayuda</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Existe mucha sobrepoblación de perros y gatos en las calles, esto es debido a que sufren de abandono y rechazos. Al estar ellos sin destino alguno, provoca que se procreen sin bajo la autoridad de un responsable.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Justificación</h4>
                        <h4 class="subheading">para ayudar</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">México abandona al 70% de sus mascotas, es el primer lugar en Latinoamérica de animales en situación de calle y de ellos, al menos 10 millones (62%) no están esterilizados.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Equipo</h4>
                        <h4 class="subheading">"Asgardianos de la Galaxia"</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Nuestra idea nació con el propósito de hacer un cambio en el mundo para los animalitos que necesitan ayuda y no tienen voz. HAY QUE HACER EL CAMBIO.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Por tales motivos nace</h4>
                        <h4 class="subheading">"PRECIOS LIFES"</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Plataforma que permite a las personas interesadas donar monetariamente a veterinarias y clínicas que estén especializadas en el cuidado y resguardamiento de los animalitos.</p></div>
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
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Es un equipo que busca ayudar a los animalitos sin fines de lucro, es solo ayudarlos para que puedan vivir más años, sean felices y si es posible, encuentren familia :)</p></div>
        </div>
    </div>
</section>
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
            </div>
        </div>
    </div>
</div>
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
                        <input class="form-control" id="name" type="text" placeholder="Tu nombre *" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Tu correo *" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Tu número *" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Tu mensaje *" required="required"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar mensaje</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">
                Copyright &copy; Your Website
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Políticas de privacidad</a>
                <a class="link-dark text-decoration-none" href="#!">Términos de uso</a>
            </div>
        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">CONOCE A MAX</h2>
                            <p class="item-intro text-muted">Listo para recibir tu ayuda</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/perrito1.jpg" alt="..." />
                            <p>Max pertenece a una familia de muy pocos recursos. En los meses anteriores, ha tenido problemas son su parte masculina, por lo que es necesaria la esterilización para que ya no esté sufriendo y pueda seguir disfrutando de la vida. Anímate a ayudar a Max :)</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Correr en el patio, jugar con pelotas y nadar.
                                </li>
                                <li>
                                    <strong>Edad de Max:</strong>
                                    3 años.
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Conoce a Deysi</h2>
                            <p class="item-intro text-muted">Ella quiere hacer feliz</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/perrito2.jpg" alt="..." />
                            <p>Deysi fue encontrada por la avenida principal de la ciudad, necesitaba mucha atención de salud e higiene. Recibió toda la ayuda posible de voluntarios y ahora se encuentra muy bien. Ella necesita operación en su matriz para que ya no tengra problemas en la orina que le quedaron por el tipo de alimentación y vida que tuvo antes de que la encontraran. Apoya a Deysi en su causa para que pueda seguir feliz y contenta :)</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Dormir, jugar, caminar y correr.
                                </li>
                                <li>
                                    <strong>Edad:</strong>
                                    5 años aprox.
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Conoce a Keko</h2>
                            <p class="item-intro text-muted">Juguetón y chiquito</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/gatito3.jpg" alt="..." />
                            <p>Keko necesita de tu ayuda. Estás sufriendo de su parte masculina y es necesaria pronta operación. Su familia es de pocos recursos y busca simplemente el bienestar de Keko. Se agradecería tu ayuda si decides ayudarlos.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Jugar con su bola de hilos, estar en las ventanas, romper audífonos y dormir.
                                </li>
                                <li>
                                    <strong>Edad:</strong>
                                    4 años
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Conoce a Layla</h2>
                            <p class="item-intro text-muted">Tranquila, amable y juguetona</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/gatito4.jpg" alt="..." />
                            <p>La historia de Layla es que llegó atropellada a la veterinaria "Huellas Mágicas", la atendieron con todos los cuidados necesarios, pero ahora necesita una operación porque se encuentra en muy mal estado. Necesita de tu apoyo, se ve que quiere levantarse y seguir adelante.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Jugar con pelotas, dormir y comer mucho.
                                </li>
                                <li>
                                    <strong>Edad:</strong>
                                    2 años aprox.
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Ella es Dolly</h2>
                            <p class="item-intro text-muted">Lista para recibir tu ayuda</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/perrito5.jpeg" alt="..." />
                            <p>Dolly ya es de tercera edad, nunca ha recibido atención de su matriz, por lo que le aparecieron tumores en sus gládulas mamarias. Ayuda a Dolly para que le remuevan los tumores y tenga una vida más larga con su familia.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Comer, dormir, enojona y le gusta correr.
                                </li>
                                <li>
                                    <strong>Edad:</strong>
                                    14 años
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 6 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Coocki "El Travieso"</h2>
                            <p class="item-intro text-muted">Solo espera recibir tu ayuda para seguir de diablillo</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/gatito6.jpg" alt="..." />
                            <p>Coocki es un gatito muy travieso, por eso es su apodo. Necesita de tu ayuda porque tiene problemas para orinar, a veces hace, a veces no y se puede escuchar que se queja mucho. Coocki estaría muy contento de que le ayudes.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Hobbies:</strong>
                                    Hacer travesuras, romper cosas, subirse a muebles, jugar.
                                </li>
                                <li>
                                    <strong>Edad:</strong>
                                    3 años.
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" href="{{url('registrarse')}}" type="button">
                                <i class="fas fa-times me-1"></i>
                                Donar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection