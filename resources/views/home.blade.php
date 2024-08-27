<?php include('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CENTRE CATHOLIQUE UNIVERSITAIRE</title>
        <!-- <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content=""> -->
       
        <!-- bootstrap css -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> -->
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">        
        
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- fevicon -->
        <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->

        <!-- Tweaks for older IEs-->
        <!-- <link rel="stylesheet" href=""> -->
        <!-- <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}"> -->
        <!-- <link rel="stylesheet" href="H:/Logs/Shifter/ccu_website/public/fontawesome/css/all.css"> -->
        <!-- <link rel="stylesheet" href="H:\Logs\Shifter\ccu_website\public\fontawesome\css\all.css"> -->
        <!-- <link rel="stylesheet" href="{{asset('fontawesome/css/brands.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome/css/solid.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

        <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
        <!-- owl stylesheets --> 

        <script src="../js/script.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        
        @include('templates.header')

        
        <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active"  data-bs-interval="10000">
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content ">
                            <div class="animations">
                                <div class="title elt">
                                    <h2 class="text h2">Notre Université</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">Nous proposons un large éventail de formations conçues pour répondre aux besoins variés du marché du travail et aux aspirations individuelles de chaque étudiant</p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="black-background"></div>
                    <img src="/images/site/0,1.jpg" class="d-block w-100" alt="Notre Université">
                </div>
                <div class="carousel-item"  data-bs-interval="10000">
                    <div class="black-background"></div>
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content ">
                            <div class="animations">
                                <div class="title elt ">
                                    <h2 class="text h2">Remise de Diplomes</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">En plus de nos formations présentielles, nous offrons également des programmes en ligne, permettant aux étudiants de poursuivre leurs études à distance sans compromettre la qualité de l'enseignement.
                                    </p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <img src="/images/site/0,2.jpg" class="d-block w-100"
                        alt="Remise de Diplomes.jpg">
                </div>
                <div class="carousel-item"  data-bs-interval="10000">
                    <div class="black-background"></div>
                    <div class="text-animation">
                        <div class="background"></div>
                        <div class="content ">
                            <div class="animations">
                                <div class="title elt ">
                                    <h2 class="text h2">Aumonerie Aniversitaire</h2>
                                </div>
                                <div class="main elt">
                                    <p class="text">L'aumônerie universitaire joue un rôle central dans la vie spirituelle et culturelle de notre campus. Elle offre un espace de recueillement, de réflexion et de rencontre pour tous les membres de la communauté universitaire, quelle que soit leur croyance.
                                    </p>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="btn btn-warning">Warning</button>
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const nextButton = document.getElementById('nextButton');
                const prevButton = document.getElementById('prevButton');
                const carouselItems = document.querySelectorAll('.carousel-item .black-background');
                const btnContent = document.querySelectorAll('.animations .button-container .btn');
                const titleContent = document.querySelectorAll('.animations .title .text');
                const mainContent = document.querySelectorAll('.animations .main .text');

                nextButton.addEventListener('click', function () {
                    carouselItems.forEach(item => {
                        item.classList.remove('slide-right');
                        item.classList.add('slide-left');
                    });
                    btnContent.classList.remove('move-bottom');
                    btnContent.classList.add('move-top');

                    titleContent.classList.remove('move-bottom');
                    titleContent.classList.add('move-top');

                    mainContent.classList.remove('move-bottom');
                    mainContent.classList.add('move-top');
                });

                prevButton.addEventListener('click', function () {
                    carouselItems.forEach(item => {
                        item.classList.remove('slide-left');
                        item.classList.add('slide-right');
                    });
                    mainContent.classList.add('move-bottom');
                    mainContent.classList.remove('move-top');

                    titleContent.classList.add('move-bottom');
                    titleContent.classList.remove('move-top');

                    btnContent.classList.add('move-bottom');
                    btnContent.classList.remove('move-top');
                });
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    </body>
</html>
