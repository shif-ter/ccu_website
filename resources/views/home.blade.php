<?php include('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CENTRE CATHOLIQUE UNIVERSITAIRE</title>
        
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">        
        
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        
        @include('templates.header')

        
        <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active"  data-bs-interval="4000">
                    <div class="black-background"></div>
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content"style="padding: 20px 40px">
                            <div class="animations">
                                <div class="title elt">
                                    <h2 class="text h2">Notre Université</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">Nous proposons un large éventail de formations conçues pour répondre aux besoins variés du marché du travail et aux aspirations individuelles de chaque étudiant</p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning bg-violet"><a href="/courses">Voir Plus</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="black-background"></div>
                    <img src="/images/site/0,1.jpg" class="d-block w-100" alt="Notre Université">
                </div>
                <div class="carousel-item"  data-bs-interval="4000">
                    <div class="black-background"></div>
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content"style="padding: 20px 40px">
                            <div class="animations">
                                <div class="title elt ">
                                    <h2 class="text h2">Remise de Diplomes</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">En plus de nos formations présentielles, nous offrons également des programmes en ligne, permettant aux étudiants de poursuivre leurs études à distance sans compromettre la qualité de l'enseignement.
                                    </p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning bg-violet"><a href="/activity">Voir Plus</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <img src="/images/site/0,2.jpg" class="d-block w-100"
                        alt="Remise de Diplomes.jpg">
                </div>
                <div class="carousel-item"  data-bs-interval="4000">
                    <div class="black-background"></div>
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content"style="padding: 20px 40px">
                            <div class="animations">
                                <div class="title elt ">
                                    <h2 class="text h2">Aumonerie Aniversitaire</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">L'aumônerie universitaire joue un rôle central dans la vie spirituelle et culturelle de notre campus. Elle offre un espace de recueillement, de réflexion et de rencontre pour tous les membres de la communauté universitaire, quelle que soit leur croyance.
                                    </p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning bg-violet"><a href="/chaplaincy">Voir Plus</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/images/site/0,3.jpg" class="d-block w-100" alt="Aumonerie Aniversitaire.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" id="prevButton">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" id="nextButton">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        
        <div class="counter">
            <div class="counter-item">
                <i class="fas fa-user-graduate"></i>
                <div id="students">0</div>
                <h5>Students</h5>
            </div>
            <div class="counter-item">
                <i class="fas fa-globe"></i>
                <div id="nationalities">0</div>
                <h5>Students Nationalties</h5>
            </div>
            <div class="counter-item">
                <i class="fas fa-university"></i>
                <div id="units">0</div>
                <h5>Academic Units</h5>
            </div>
            <div class="counter-item">
                <i class="fas fa-chalkboard-teacher"></i>
                <div id="professors">0</div>
                <h5>Professors</h5>
            </div>
        </div>


        @include('templates.footer') 

        <script>
            if (window.innerWidth > 1052) {
                document.getElementById("menu").setAttribute("open", "open");
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    </body>
</html>
