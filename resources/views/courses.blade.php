<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - Nos Formations</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> 

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        @include('templates.header')

        <section class="inner-header"
            style="background-image: url('{{asset("images/site/4,4.jpg")}}'); background-position: 0 53%">
            <div class="background-overlayer"></div>
            <div class="inner-header-content">
                <h1>Nos Formations</h1>
                <div class="inner-header-detail">
                    <a href="/">Acceuil</a> 
                    <!-- <span class="fa fa-angle-right"></span> -->
                    <p>Nos Formations</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>Nous proposons un large éventail de formations conçues pour répondre aux besoins variés du marché du travail et aux aspirations individuelles de chaque étudiant. Nos formations certifiantes couvrent des domaines essentiels comme l'informatique, la gestion des conflits, et le leadership féminin. Ces programmes sont pensés pour offrir des compétences pratiques et directement applicables, garantissant ainsi une insertion rapide et réussie dans le monde professionnel.</p>
            </br>
            <p>En plus de nos formations présentielles, nous offrons également des programmes en ligne, permettant aux étudiants de poursuivre leurs études à distance sans compromettre la qualité de l'enseignement. Ces formations en ligne, développées en partenariat avec des institutions prestigieuses comme le CERAP-Université Jésuite d’Abidjan et le JWL, offrent une flexibilité sans pareille pour ceux qui souhaitent concilier études et engagements personnels. Notre engagement à former les jeunes professionnels se reflète également dans nos programmes d’apprentissage direct, où l'expérience pratique est au cœur de l'apprentissage.</p>
            <section class="detail">
                <div class="row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Formations Certifiantes</h2>
                                <p class="card-text">                            
                                    <ul>
                                        <li><a href="#">Les cours d’Informatique</a></li>
                                        <li><a href="#">Analyse et Gestion des conflits</a></li>
                                        <li><a href="#">Agents Psycho-sociaux</a></li>
                                        <li><a href="#">Logistique Humanitaire et Transport</a></li>
                                        <li><a href="#">Coordination des Programmes Humanitaires</a></li>
                                        <li><a href="#">Leadership Féminin (neuf modules de formation)</a></li>
                                        <li><a href="#">Opératrice de saisie, Secrétariat Bureautique et Rédaction Administrative</a></li>
                                        <li><a href="#">Langues Anglaise, Française et Sango</a></li>
                                        <li><a href="#">Agence de voyage pour vols aériens – Agents facilitateurs / facilitatrices</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Formations En Ligne</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="#">Diplômes Universitaires avec le CERAP-UNIVERSITE JESUITE D’ABIDJAN</a></li>
                                        <li><a href="#">JWL (l’enseignement Jésuite dans le monde)</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Formations Professionnelle des Jeunes</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="#">Apprentissage direct</a></li>
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
                            <img src="images/site/0,1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/0,2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/1,0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/site/3,5.jpg" class="d-block w-100" alt="...">
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