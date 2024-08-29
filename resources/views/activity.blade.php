<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - {{ __('header.activities') }}</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> 

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        @include('templates.header')

        <section class="inner-header"
            style="background-image: url('{{asset("images/site/4,1.jpg")}}'); background-position: 0 53%">
            <div class="background-overlayer"></div>
            <div class="inner-header-content">
                <h1>{{ __('header.activities') }}</h1>
                <div class="inner-header-detail">
                    <a href="/">{{ __('header.home') }}</a>
                    <p>{{ __('header.activities') }}</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>Notre université ne se limite pas à l'enseignement académique ; elle s’engage activement dans des initiatives sociales et humanitaires qui touchent les vies au-delà du campus. L'accompagnement des jeunes est l'une de nos priorités, avec des programmes dédiés à leur développement personnel et professionnel. Nous croyons fermement en l'importance de préparer la prochaine génération à être des leaders responsables et des citoyens engagés.</p>
            </br>
            <p>En partenariat avec le Service Jésuite pour les Réfugiés (JRS), nous travaillons également à offrir soutien et assistance aux communautés vulnérables, en particulier les réfugiés. Cette collaboration témoigne de notre engagement à la justice sociale et à la dignité humaine. De plus, à travers le Complexe Scolaire Pape François, nous investissons dans l’éducation des jeunes, en leur fournissant les outils nécessaires pour réussir dans un monde en constante évolution.</p>
            
            <section class="detail">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card"style="height: 100%">
                            <img src="images/site/4,1.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Accompagnement des jeunes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card"style="height: 100%">
                            <img src="images/site/4,2.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Service Jésuite pour les Réfugiés (JRS)</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card"style="height: 100%">
                            <img src="images/site/4,3.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Complexe Scolaire Pape François</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card"style="height: 100%; ">
                            <img src="images/site/1.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Marathon</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <h2>Galerie</h2>
            <section class="gallery">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/site/4,1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/4,2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/4,3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/4,4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </div>



        @include('templates.footer')


        <script>
            if (window.innerWidth > 1052) {
                document.getElementById("menu").setAttribute("open", "open");
            }
        </script>
        <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>

</html>