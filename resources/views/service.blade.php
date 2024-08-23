<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - Nos Services</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> 

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        @include('templates.header')

        <section class="inner-header"
            style="background-image: url('{{asset("images/site/biblio1.jpg")}}'); background-position: 0 53%">
            <div class="background-overlayer"></div>
            <div class="inner-header-content">
                <h1>Nos Services</h1>
                <div class="inner-header-detail">
                    <a href="/">Acceuil</a>
                    <p>Nos Services</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>L'université met à disposition une variété de services conçus pour soutenir le parcours académique et personnel de chaque étudiant. Notre bibliothèque, riche de plus de 3500 livres scientifiques, est équipée d’ordinateurs connectés à Internet, offrant un espace de recherche et de travail idéal pour approfondir vos connaissances. De plus, nos salles de consultation en ligne et d’impression sont à votre disposition pour faciliter vos travaux académiques et projets de recherche.</p>
            </br>
            <p>Nous croyons également qu'un esprit sain réside dans un corps sain. C’est pourquoi nous avons développé des services de restauration de qualité, afin que vous puissiez vous nourrir sainement tout au long de la journée. Que ce soit pour un repas complet ou une pause café, nos installations vous offrent un cadre agréable pour vous détendre et socialiser entre deux cours.</p>
            
            <section class="detail">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Bibliothèque</h2>
                                <p class="card-text">                            
                                    <ul>
                                        <li><a href="#">3500 Livres scientifiques</a></li>
                                        <li><a href="#">Salle de lecture équipée d’ordinateurs connectés à internet</a></li>
                                        <li><a href="#">Salle de consultation en ligne</a></li>
                                        <li><a href="#">Salle d’impression</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Restauration</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="#">Restauration</a></li>
                                    </ul>
                                </p>
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
                            <img src="images/site/biblio1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/biblio2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/biblio3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/biblio4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/resto.jpg" class="d-block w-100" alt="...">
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