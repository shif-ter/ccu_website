<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - {{ __('header.services') }}</title>

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
                <h1>{{ __('header.services') }}</h1>
                <div class="inner-header-detail">
                    <a href="/">{{ __('header.home') }}</a>
                    <p>{{ __('header.services') }}</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>{{ __('services.p1') }}</p> 
            </br>
            <p>{{ __('services.p2') }}</p>
            
            <section class="detail">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card"style="pointer-events: none">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('header.services.library') }}</h2>
                                <p class="card-text">                            
                                    <ul>
                                        <li><a href="#">{{ __('header.services.library.scientific_books') }}</a></li>
                                        <li><a href="#">{{ __('header.services.library.reading_room') }}</a></li>
                                        <li><a href="#">{{ __('header.services.library.online_consultation') }}</a></li>
                                        <li><a href="#">{{ __('header.services.library.printing_room') }}</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card"style="pointer-events: none">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('header.services.food_service') }}</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="#">{{ __('header.services.food_service.restoration') }}</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <h2>{{ __('galery') }}</h2>
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
            } else {
                document.getElementById("menu").removeAttribute("open");
            }
        </script>
        <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>

</html>