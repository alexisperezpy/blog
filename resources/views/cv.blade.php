<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Alexis Pérez</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body id="page-top">

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">AlePerez</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#cv">Skills</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link js-scroll" href="#servicio">Servicios</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="{{ route('posts.index') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
    <div id="inicio" class="intro route bg-image" style="background-image: url(img/devel.webp)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4">Lic. Alexis Pérez</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">Web Developer, Laravel + PHP + JavaScript + HTML5 + CSS + MySQL + Postgresql </span><strong class="text-slider"></strong></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <!--/ Intro Skew End /-->

    <!--/ Section CV-->
    <section class="cv-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="cv" class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="cv-img">
                                            <img src="img/ale.jpg" style="border-radius:150px;" class="img-fluid b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div  class="col-sm-6 col-md-7">
                                        <div class="cv-info">
                                            <p><span class="title-s">Nombre: </span> <span>Alexis José Pérez</span></p>
                                            <p><span class="title-s">Perfil: </span> <span>Backend Dev.</span></p>
                                            <p><span class="title-s">Email: </span> <span>aleperez.dev@gmail.com</span></p>
                                            <p><span class="title-s">Telefono: </span> <span>(+595) 982-876-865</span></p>
                                            <p><span class="title-s">Ypacarai - Paraguay</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <h4 class="title-center">Skills</h4>

                                    <span>HTML5</span> <span class="pull-right">Junior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>CSS</span> <span class="pull-right">Junior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>JavaScript</span> <span class="pull-right">Junior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>PHP | Laravel</span> <span class="pull-right">Junior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>Bootstrap4</span> <span class="pull-right">Junior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>MySQL</span> <span class="pull-right">Mid-Level</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span>Linux Web Server</span> <span class="pull-right">Mid-Level</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>Proxmox V.E.</span> <span class="pull-right">Mid-Level</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>ISO 9001:2015</span> <span class="pull-right">Senior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>Mejora y Optimización de Procesos</span> <span class="pull-right">Senior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>Gestión y Mitigación de Riesgos Corporativos</span> <span class="pull-right">Senior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>

                                    <span>Gestión de Quejas y Reclamos</span> <span class="pull-right">Senior</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-center">RESUME</h5>
                                    </div>
                                    <p class="lead" text-justify>
                                        Experiencia realizando Reingenieria de procesos, Soporte técnico/funcional Level one e implementaciones de la Plataforma "ISO-Digital" herramienta para la Gestión de Normas Certificables.
                                        <li>Grupo Sueñolar</li>
                                        <li>Inmobiliaria del Este S.A.</li>
                                        <li>Prodoc S.A.</li>
                                        <li>Shopping Villa Morra</li>
                                        <li>Comtel S.A.</li>
                                        <li>MeyerLab S.A.</li>
                                        <li>Grupo N.S.A.</li>
                                        <li>Munser S.A.</li>
                                        <li>Fundación Moíses Bertoní</li>
                                        <br>
                                    </p>
                                    <p class="lead" text-justify>
                                        Experiencia en la migración/consolidación de un Servidor Físico Linux Centos 7 a un entorno Virtualizado de Alta Disponibilidad con Proxmox V.E. 5, en 03 nodos + 01 Servidor de Archivos NAS conectados sobre dos vlan's para evitar congestionar el trafico de la red corporativa. 
                                    </p><br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section CV End /-->

    <!--/ Section Services Star /-->
{{--     <section id="servicio" class="servicio-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Servicios
                        </h3>
                        <p class="subtitle-a">
                            Desarrollo Web FullStack, Mejora y Optimización de procesos, Auditorias Tercerizadas ISO 9001:2015, Charlas y Talleres.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="servicio-box">
                        <div class="servicio-ico">
                            <span class="ico-circle"><i class="ion-monitor"></i></span><br>
                        </div>
                        <div class="servicio|-content">
                            <h2 class="s-title">Desarrollo Web</h2>
                            <p class="s-description text-center">
                                Autodidacta y en formación continua, con enfoque en el Desarrollo Web utilizando los siguientes lenguajes, herramientas y framewoks;
                                <ul>
                                    <li><span><b>FrameWork: </b></span> Laravel, Vue, Bootstrap</li>
                                    <li><span><b>Backend: </b></span> PHP | JavaScript | MySQL | Postgresql</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="servicio-box">
                        <div class="servicio-ico">
                            <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span><br>
                        </div>
                        <div class="servicio-content">
                            <h2 class="s-title">Rre-Ingenieria de Procesos</h2>
                            <p class="s-description text-center">
                                Utilización de metodologías propias desarrollada para obtener resultados a corto tiempo, a través de relevamiento in situ y temporización de tareas y actividades,
                                <h5 align="center">Entregables</h5>
                                <ul>
                                    <li>Análisis GAP / Reporte Situacional.</li>
                                    <li>Reporte de controles críticos faltantes.</li>
                                    <li>Desarrollo de Políticas de actuación y control.</li>
                                    <li>Plan de mejora y optimización.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="servicio-box">
                        <div class="servicio-ico">
                            <span class="ico-circle"><i class="ion-stats-bars"></i></span><br>
                        </div>
                        <div class="servicio-content">
                            <h2 class="s-title">Auditorias ISO 9001:2015</h2>
                            <p class="s-description text-center">
                                La experiencia de más de 10 años en el mercado avala nuestro servicio de alto valor agregado. Adaptados a los requerimientos de las Organizaciones Innovadoras y con alto enfoque de calidad,
                                <h5 align="center">Entregables</h5>
                                <ul>
                                    <li>Elaboración de Check List de Auditoria.</li>
                                    <li>Informes de Auditorias altamente detallados.</li>
                                    <li>Recomendaciones con alto enfoque a la mitigación de Riesgos.</li>
                                    <li>Plan de mejora continua en base a los hallasgos detectados.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/ Section Services End /-->

    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">10</p>
                            <span class="counter-text">Implementaciones Exitosas</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">15</p>
                            <span class="counter-text">Años de Experiencia</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">30</p>
                            <span class="counter-text">Clientes Satisfechos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div> --}}

    <!--/ Section Testimonials Star /-->
    {{-- <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div id="testimonial" class="col-md-12">
                    <div id="testimonial-mf" class="owl-carousel owl-theme">
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                                <span class="author">Daniel Roigt - IDESA</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Excelente Profesional y excelente plataforma de trabajo, recomendado 100%.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                                <span class="author">Diana Benítez - FATT Representaciones S.A.</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Muy contenta con el servicio brindado, cumpliendo en tiempo y forma todos los trabajos programados.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                                <span class="author">Nancy Cabrera - Grupo Sueñolar S.A.</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Muy Recomendado, tanto el Servicio Técnico como la Plataforma ISO-Digital, ayuda a reducir los tiempos operativos relacionados al seguimiento de nuestro S.G.C.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contacto-mf">
                        <div class="box-shadow-full">
                            <div id="contacto" class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Enviame un Mensaje
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="button button-a button-big button-rouded">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Trabajemos juntos!.
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Estoy seguro de poder ayudarte en tu próximo proyecto, me gustaría ser un aliado importante para tí, si estás listo para trabajar juntos, no dudes en ponerte en contacto!
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span> Calle Benjamín Aceval N° 124, B° Santa Rosa - Ypacarai</li>
                                            <li><span class="ion-ios-telephone"></span> (+595) 982-876-865</li>
                                            <li><span class="ion-email"></span> aleperez.dev@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.facebook.com/aleperezpy" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                            <li><a href="https://www.instagram.com/aleperezpy" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                            <li><a href="https://www.twitter.com/senpai_py" target="_blank"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>SoporticPY</strong>. All Rights Reserved</p>
                            <!-- <div class="credits">
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Section Contact-footer End /-->

    <a href="#inicio" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/counterup/jquery.counterup.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>

</html>