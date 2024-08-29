<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- site metas -->
        <title>CCU - {{ __('header.courses') }}</title>

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
                <h1>{{ __('header.courses') }}</h1>
                <div class="inner-header-detail">
                    <a href="/">{{ __('header.home') }}</a> 
                    <!-- <span class="fa fa-angle-right"></span> -->
                    <p>{{ __('header.courses') }}</p>
                </div>
            </div>

        </section>


        <div class="main-content text-justify">
            <p>{{ __('courses.p1') }}</p>
            </br>
            <p>{{ __('courses.p2') }}</p>
            <section class="detail">
                <div class="row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="pointer-events: none">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('header.courses.certified_courses') }}</h2>
                                <p class="card-text">                            
                                    <ul>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.computer_science') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.conflict_management') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.psycho_social_agents') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.humanitarian_logistics') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.humanitarian_coordination') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.female_leadership') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.data_entry') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.language_courses') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.certified_courses.travel_agency') }}</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="pointer-events: none">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('header.courses.online_courses') }}</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="/courses">{{ __('header.courses.online_courses.university_degrees') }}</a></li>
                                        <li><a href="/courses">{{ __('header.courses.online_courses.jwl') }}</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card"style="pointer-events: none">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('header.courses.youth_training') }}</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><a href="#">{{ __('header.courses.youth_training.direct_apprenticeship') }}</a></li>
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