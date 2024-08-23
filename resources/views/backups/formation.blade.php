<?php include ('data.php') ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- site metas -->
    <title>CCU - Nos Formations</title>
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
        <p>Les étudiants ont accès à des équipements de travail (salle de lecture, préaux équipés de tableaux), aux livres universitaires dans les bibliothèques, et à un ensemble de formations humaines, intellectuelles et spirituelles, d’animation culturelles variées (conférences, films débats, présentation d’un livre par auteur, thés-débats…). Une cafétéria offre la possibilité de se restaurer à moindre coût, et de profiter d’un lieu convivial.</p>
        <div class="about">
            <img src="images/site/4,3.jpg" alt="Notre campus">
            <div class="about-text">
                <p>Le Centre Catholique Universitaire (CCU) de N’Djamena est une initiative de l’archidiocèse de N’Djamena. Ouvert en 1989 dans le quartier de Sabangali, puis en 1994 à Farcha, il s’adresse à tous les étudiants des universités, des institutions et des grandes écoles, sans aucune distinction.</p>
                <p>Grâce aux équipements et aux propositions de formations et d’animations, le CCU s’efforce d’apporter aux étudiants un soutien et un accompagnement dans leurs études.</p>
            </div>
        </div>
    </div>



    @include('templates.footer')


    <script>
        if (window.innerWidth > 1052) {
            document.getElementById("menu").setAttribute("open", "open");
        }
    </script>
</body>

</html>