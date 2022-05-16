@extends('theme.main')
@section('content')
<style>
    .landing-section {
        padding: 100px 0;
    }
    .landing-header {
        padding: 250px 0;
    }

    .element-header-card{
        color: #fff;
        font-family: "Montserrat", sans-serif ;
        font-size: 37px;
        font-weight: 800;
        line-height: 1.3em;
        letter-spacing: 0px;
        text-shadow: 0px 2px 3px rgb(0 0 0 / 22%);
    }

    .icon-card{
        width: 100px;
        display: block;
        margin: auto;
    }

    .card-icon{
        height: 300px;
    }


    /*.map-responsive{
        overflow:hidden;
        padding-bottom: 30%;
        position:relative;
        height:0;
    }

    .map-responsive iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }*/
</style>


    <section class="content"></section>
        <div class="container-fluid" style="padding: 0px;/* height: 128px; */margin: 0px;" >
            {{--}}<div class="card bg-dark text-white">
                <img src="/images/trafico.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Auto Escuela ZS</h3>
                    <p class="card-text">Saca tu licencia de conducir con nosotros!</p>
                </div>
            </div>*/
                <img src="/images/background.jpg" class="img-fluid"  alt="" style="width: 100%">--}}
                <div class=" img-fluid" style="background-image: url('../images/autoescuela2.jpg');background-size: 100%;background-attachment: fixed;"  >
                        <div class="col-md-12" style="height: 45vh;">
                            <p style="font-size: 3.25rem; font-weight: 1000;text-align: center;padding-top: 42px;color: #464646;text-shadow: 1px 1px white;">AUTO ESCUELA ZS</p>
                            <h3 style="text-align: center;text-shadow:     text-shadow: 1px 1px black;color: white;">Saca tu licencia de conducir con nosotros!</h3>
                        </div>
                </div>
        </div>

   {{--}} <section id="aboutUs"></section>
    <div class="main">
            <div class="section text-center landing-section" style="background: #d8d8d8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <img src="/images/autoescuela1.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <h2>Sobre Nosotros</h2>
                            <h5>Somos una autoescuela de manejo que te brinda la posibilidad de obtener tu licencia de conducir de la forma más cómoda: contratado el curso, un instructor pasa a buscarte por el lugar que prefieras, el día que quieras y en el horario que puedas. <br>
                                Disponemos de vehículos modernos, súper equipados y son sistema de doble comando, para que siempre te sientas seguro.<br>
                                Además contamos con profesionales capacitados para que aprendes a manejar en pocas clases y estés apto para rendir el examen.</h5><br/>
                            <a href="#" class="btn btn-danger btn-fill">See l</a>
                        </div>

                    </div>

                </div>
            </div>
    </div>--}}

    <section id="icons"></section>
    <div class="section landing-section">
        <div class="container" style="display: flex; flex-flow: row wrap">
                <div class="row">
                    <div class="col col-md-4 col-sm-12">
                        <div class="mb-3">
                            <div class="card card-icon shadow-lg p-3 mb-5 bg-white rounded">
                                <img src="/images/Iconcone.png" class="card-img-top img-fluid icon-card " alt="...">
                                <div class="card-body">
                                    <h3 class="text-center" style="color: #ff7400;font-weight: 700">Rendi con nosotros</h3>
                                    <p class="display-6 text-center">Podés usar nuestros vehículos para rendir el examen de conducir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12">
                        <div class="mb-3">
                            <div class="card card-icon shadow-lg p-3 mb-5 bg-white rounded" >
                                <img src="/images/iconWheel.png" class="card-img-top img-fluid icon-card" alt="...">
                                    <div class="card-body">
                                        <h3 class="text-center" style="color: #ff7400;font-weight: 700">Doble Comando</h3>
                                        <h5 class="display-6 text-center">Nuestros móviles cuentan con doble comando para tener un total control de la unidad ante cualquier eventualidad.
                                        </h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12">
                        <div class="mb-3">
                            <div class="card card-icon shadow-lg p-3 mb-5 bg-white rounded" >
                                <img src="/images/trafficligh.png" class="card-img-top img-fluid icon-card" alt="..." >
                                <div class="card-body">
                                    <h3 class="text-center" style="color: #ff7400;font-weight: 700">Servicio Puerta a Puerta</h3>
                                    <h5 class="display-6 text-center">Te pasamos a buscar por donde estes sin costo adicional.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col col-md-4 col-sm-12">
                        <div class="mb-3">
                            <div class="card card-icon shadow-lg p-3 mb-5 bg-white rounded" >
                                <img src="/images/Iconcone.png" class="card-img-top img-fluid icon-card" alt="..." >
                                <div class="card-body">
                                    <h3 class="text-center" style="color: #aa4e01;font-weight: 700">Profesionales</h3>
                                    <h5 class="display-6 text-center">Contamos con instructores capacitados que te enseñan a tomar conciencia de
                                        la responsabilidad de estar al volante.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12">
                        <div class="mb-3">
                            <div class="card card-icon shadow-lg p-3 mb-5 bg-white rounded">
                                <img src="/images/iconcar.png" class="card-img-top img-fluid icon-card" alt="..." style="padding-bottom: 10px; padding-top: 15px;">
                                <div class="card-body">
                                    <h3 class="text-center" style="color: #aa4e01;font-weight: 700">Caja Automática o Manual</h3>
                                    <h5 class="display-6 text-center">Además de nuestras unidades de caja manual, también contamos con unidades con caja automatica.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    {{--}}<section class="services"></section>--}}

<section></section>


<section class="bg-light py-5 border-bottom">
</section>
    <div class="container px-5 my-5">
        <div class="text-center mb-5 col-sm-12">
            <h2 class="fw-bolder">CONOCE NUESTROS PLANES</h2>
            <p class="lead mb-0">¡Nos adaptamos a tus necesidades!</p><hr>
        </div>
        <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Free</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$11.700</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <strong>5 clases de una hora</strong>
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Servicio puerta a puerta
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Circulación en tránsito real
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Auto con caja manual y doble comando.
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                Horario a coordinar con el alumno
                            </li>

                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Reserva tu plan</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card pro-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                            Pro
                        </div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">8 CLASES</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <strong>8 clases de una hora</strong>
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Servicio puerta a puerta
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Circulación en tránsito real
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Auto con caja manual y doble comando.
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                Horario a coordinar con el alumno
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card enterprise-->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">10 CLASES</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <strong>10 clases de una hora</strong>
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Servicio puerta a puerta
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Circulación en tránsito real
                            </li>
                            <li class="mb-2">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Auto con caja manual y doble comando.
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                Horario a coordinar con el alumno
                            </li>

                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--}}<section class="ubication"></section>--}}
    <div class="section section-light-brown landing-section" style="background: #d8d8d8">
        <div class="container" >
            <h4 class="text-center">Zona de Cobertura</h4>
            <h5 class="text-center">SERVICIO PUERTA A PUERTA SIN COSTO</h5>
            <div class="col-md-12">
                <div class="row row-cols-2">
                    <div class="col-md-6 col-sm-12">
                        <h3>
                            RESERVA TU PLAN!
                        </h3>

                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group" >
                                        <label for="name">Tu nombre</label>
                                        <input class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group" >
                                        <label for="mail"> Tu mail</label>
                                        <input class="form-control" id="mail" name="mail">
                                    </div>
                                    <div class="form-group" >
                                        <label for="text"> Asunto</label>
                                        <input class="form-control" id="text" name="mail">
                                    </div>
                                    <div class="form-group" >
                                        <label for="message"> Mensaje</label>
                                        <textarea class="form-control" id="message" name="message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success float-right">Enviar consulta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 map-responsive">
                        {{--}}<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26238.688417891426!2d-58.3991998447704!3d-34.70931488980984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccd2304c40089%3A0x7fafac9e3e9126d6!2zTGFuw7pz!5e0!3m2!1ses!2sar!4v1651961510875!5m2!1ses!2sar" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        --}}<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74101.75479451074!2d-58.41886007329806!3d-34.834465725492365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32d1e2e8d9123%3A0x20014125732845a6!2sAlmte%20Brown%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1652113902616!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                   {{--}} <div class="col-md-4 col-sm-12 landing-section">
                                <div class="col-md-8 col-md-offset-2 toogleMax">
                                    <button class="btn  boton-zonas" type="button" data-region="Zona Sur" data-toggle="collapse" data-target="#zona-sur" aria-expanded="true"><i class="fa fa-list maxright" aria-hidden="true"></i>Cobertura Zona Sur</button>
                                    <div id="zona-sur" class="dont-collapse-sm collapse" aria-expanded="false" style="">
                                        <h2 style="text-align:center;">Zona Sur</h2>
                                        <ul class="barrios-2 listResp">
                                            <li>Almirante Brown</li>
                                            <li>Avellaneda</li>
                                            <li>Quilmes</li>
                                            <li>Lanús</li>
                                            <li>Florencio Várela</li>
                                            <li>Berazategui</li>
                                            <li>Lomas de Zamora</li>
                                            <li>Avellaneda</li>
                                            <li>Banfíeld</li>
                                            <li>Bernal</li>
                                            <li>Burzaco</li>
                                            <li>Ezeiza</li>
                                            <li>Florencia Várela</li>
                                            <li>Lanús</li>
                                            <li>Lavallol</li>
                                            <li>Lomas de Zamora</li>
                                            <li>Longchamps</li>
                                            <li>Monte Chingolo</li>
                                            <li>Monte Grande</li>
                                            <li>Paraná</li>
                                            <li>Quilmes</li>
                                            <li>Ranelagh</li>
                                            <li>San F. Solano</li>
                                            <li>T. Suárez</li>
                                            <li>Wilde.</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>

                        </div>
                        </div>
                    </div>*/--}}
                </div>
            </div>
        </div></div>


    {{--}}<section class="contact"></section>--}}
    <div class="section section-light-brown landing-section">
        <div class="container-fluid">
            <div class="col-md-12">
            <div class="row row-cols-2">
                <div class="col-md-6 col-sm-12">
                    <h3>Contactanos!</h3>

                    <div class="card">
                        <div class="card-body">
                    <form>
                        <div class="form-group" >
                            <label for="name">Tu nombre</label>
                            <input class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group" >
                            <label for="mail"> Tu mail</label>
                            <input class="form-control" id="mail" name="mail">
                        </div>
                        <div class="form-group" >
                            <label for="text"> Asunto</label>
                            <input class="form-control" id="text" name="mail">
                        </div>
                        <div class="form-group" >
                            <label for="message"> Mensaje</label>
                            <input class="form-control" id="message" name="message">
                        </div>
                        <button type="submit" class="btn btn-success float-right">Enviar consulta</button>
                    </form>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">

                </div>
            </div>
        </div>
    </div>
    </div>

<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
        </form>
    </div>
</section>
@endsection