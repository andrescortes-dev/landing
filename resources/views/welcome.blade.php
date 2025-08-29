<!DOCTYPE html>
<html lang="en">
<head>
    <title>Author - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">andrescortes<span>.</span>dev</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Inicio</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contacto</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap js-fullheight">
    <div class="container px-0">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="one-forth d-flex">
                    <div class="text mt-5">
                        <br><br><br>
                        <span class="mt-5" style="text-transform: uppercase;font-size: 14px;font-weight: 700;color: #17b978;letter-spacing: 2px;">Aprender y enseñar es parte del mismo viaje</span>
                        <h1 style="font-size: 60px;font-weight: 900;line-height: 1.3;">Robinson Andres Cortes</h1>
                        <p style="font-size: 18px;line-height: 1.5;font-weight: 400;">Profesional apasionado por la
                            enseñanza y el desarrollo de software, dedicado a compartir
                            conocimiento y
                            crear soluciones innovadoras. Su visión combina tecnología, aprendizaje y liderazgo para
                            inspirar a otros a crecer.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Explorar cursos</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-1 text-center mt-3">
                <img class="one-third align-self-end order-md-last img-fluid" src="{{ url('images/robinson.png') }}" alt="" style="height: auto;width: auto;  filter: blur(1px);transform: scale(.7)">
            </div>
        </div>
        <!-- <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="{{ url('images/robinson.png') }}" alt="" style="height: auto;width: auto;  filter: blur(1px);transform: scale(.7)">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Aprender y enseñar es parte del mismo viaje</span>
                    <h1>Robinson Andres Cortes</h1>
                    <p>Profesional apasionado por la enseñanza y el desarrollo de software, dedicado a compartir
                        conocimiento y
                        crear soluciones innovadoras. Su visión combina tecnología, aprendizaje y liderazgo para
                        inspirar a otros a crecer.</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Explorar cursos</a></p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb " id="contact-section">
    <div class="container mb-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Contáctame</h2>
                <p>Entre líneas de código siempre hay un <code> console.log("Hola Mundo")</code> esperando ser
                    escuchado. La
                    tecnología no solo resuelve problemas, también conecta ideas. Escríbeme y creemos algo que
                    trascienda.</p>
            </div>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre completo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                                  placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126916.69980799768!2d-75.66361382466339!3d6.2443676962019925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428dfb80fad05%3A0x42137cfcc7b53b56!2sMedell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1756344969080!5m2!1ses-419!2sco"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-section mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Acerca de</h2>
                    <p>
                        Soy Robinson Andres Cortes, programador, profesor y líder de desarrollo de software.
                        Creo en la enseñanza práctica, en el poder del código para transformar ideas en soluciones y en
                        compartir conocimiento como la mejor forma de crecer.
                        Mi trabajo une la lógica del desarrollo con la creatividad de la enseñanza, construyendo
                        proyectos que inspiran y forman nuevas generaciones de programadores.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ url('js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ url('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ url('js/google-map.js') }}"></script>

<script src="{{ url('js/main.js') }}"></script>

</body>
</html>

