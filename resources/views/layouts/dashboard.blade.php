<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title id="page-title"><?php $currenturl = Route::current()->getName(); echo $currenturl?></title>

    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.theme.default.min.css')}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/Favicon-GV.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body>
<div class="open-close-sidebar fixed rounded-full bg-color-primary bottom-12 right-12 h-16 w-16 justify-center flex items-center">
    <img id="open-sidebar" style="height: 25px;" src="{{URL::asset('/img/menu.png')}}" />
    <img id="close-sidebar" class="hidden" style="height: 25px;" src="{{URL::asset('/img/close.png')}}" />
</div>
<div style="min-height: 100vh" class="flex">
    <div id="sidebar" class="dashboard-sidebar w-1/5 shadow-lg lg:block hidden">
        <div class="flex flex-col">
            <div class="p-5 border-bottom-primary">
                <a class="flex justify-center" href="/"><img class="w-40" src="{{URL::asset('/img/LogoGV-Zwart.png')}}"/></a>
            </div>
            <div class="p-5">
                <div id="nav-dashboard">
                    <div><a class="flex items-center pb-3 font-bold active-dashboard" href="/dashboard"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/home-icon-silhouette.png')}}" />Dashboard</a></div>
                    <div><a class="flex items-center pb-3 font-bold" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/user.png')}}" />Gebruikers</a></div>
                    <div><a class="flex items-center pb-3 font-bold" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/add-user.png')}}" />Rollen</a></div>
                    <div><a class="flex items-center pb-3 font-bold" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/package.png')}}" />Producten</a></div>
                    <div><a class="flex items-center pb-3 font-bold" href="/dashboard-nieuwsberichten"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/news.png')}}" />Nieuwsberichten</a></div>
                    <div><a class="flex items-center pb-3 font-bold" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/settings-gears.png')}}" />Instellingen</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:w-4/5 w-full flex justify-center" style="background-color: #f7f7f7">
        <div class="bg-white shadow-lg rounded-md w-5/6 h-max mt-10 p-5">
            @yield('content')
        </div>
    </div>

</div>
<div class="bg-color-dark py-4">
    <div class="container">
        <p class="text-white font-bold">©<?php echo date("Y"); ?> groene vingers </p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="{{URL::asset('/js/dashboard.js')}}"></script>
</body>
