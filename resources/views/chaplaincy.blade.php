<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - Aumonerie Universitaire</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> 

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        @include('templates.header')

        <section class="inner-header"
            style="background-image: url('{{asset("images/site/0,3.jpg")}}'); background-position: 0 53%">
            <div class="background-overlayer"></div>
            <div class="inner-header-content">
                <h1>Aumonerie Universitaire</h1>
                <div class="inner-header-detail">
                    <a href="/">{{ __('header.home') }}</a>
                    <p>Aumonerie Universitaire</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>L'aumônerie universitaire joue un rôle central dans la vie spirituelle et culturelle de notre campus. Elle offre un espace de recueillement, de réflexion et de rencontre pour tous les membres de la communauté universitaire, quelle que soit leur croyance. Des messes régulières sont célébrées, offrant aux étudiants et au personnel l'occasion de se rassembler, de prier et de renforcer leur foi.</p>
            </br>
            <p>Outre les services religieux, l'aumônerie organise également des conférences académiques sur des sujets variés, favorisant le dialogue entre foi et raison, et encourageant une réflexion profonde sur les questions éthiques et spirituelles de notre temps. Enfin, des activités culturelles, incluant des remises de certificats et diplômes, sont également proposées pour célébrer les réalisations académiques et renforcer le lien communautaire.</p>
            
            <section class="detail">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card"style="height: 100%">
                            <img src="images/site/0,3.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Les Messes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card"style="height: 100%">
                            <img src="images/site/3,1.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Conférences Académiques</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card"style="height: 100%">
                            <img src="images/site/3,4.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Remises des diplômes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card"style="height: 100%; ">
                            <img src="images/site/3,3.jpg"style="height: 220px">
                            <div class="card-body card-body2">
                                <h2 class="card-title">Aumonerie Universitaire</h2>
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
                            <img src="images/site/0,3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,6.jpg" class="d-block w-100" alt="...">
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