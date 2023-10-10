<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title id="page-title"><?php $currenturl = Route::current()->getName(); echo $currenturl?> - Groene Vingers</title>

    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/owlcarousel/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/contact.css')}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/Favicon-GV.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
<div class="preloader-wrapper">
    <div class="preloader">
        <img src="{{URL::asset('/img/Plant.gif')}}" alt="NILA">
    </div>
</div>
<header class="primary-header">
    <nav class="navbar container">
        <a href="/">
            <img src="{{URL::asset('/img/LogoGV-Wit.png')}}" class="logo" alt="logo"></img>
        </a>

        <ul class="nav-list">
            <li>
                <a href="/" id="homepage" class="nav-link hover-underline-animation">Home</a>
            </li>
            <li>
                <a href="/onzeproducten" id="productspage" class="nav-link hover-underline-animation">Onze producten</a>
            </li>
            <li>
                <a href="/overons" id="overonspage" class="nav-link hover-underline-animation">Over ons</a>
            </li>
            <li>
                <a href="/contact" id="contactpage" class="nav-link hover-underline-animation">Contact</a>
            </li>
            <li>
                <select class="form-select changeLang nav-link bg-transparent border-0 -mt-8  ">
                    <option class="bg-white option" value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch</option>
                    <option class="bg-white option" value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                    <option class="bg-white option" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option class="bg-white option" value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                    <option class="bg-white option" value="zh_HK" {{ session()->get('locale') == 'zh_HK' ? 'selected' : '' }}>Chinese</option>
                    <option class="bg-white option" value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                    <option class="bg-white option" value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali</option>
                    <option class="bg-white option" value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
                    <option class="bg-white option" value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portuguese</option>
                    <option class="bg-white option" value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German</option>

                </select>
            </li>
        </ul>
    </nav>

    <ul class="menu">
        <li>
            <a href="/" id="homepage" class="menuItem hover-underline-animation">Home</a>
        </li>
        <li>
            <a href="/onzeproducten" id="productspage" class="menuItem hover-underline-animation">Onze producten</a>
        </li>
        <li>
            <a href="/overons" id="overonspage" class="menuItem hover-underline-animation">Over ons</a>
        </li>
        <li>
            <a href="/contact" id="contactpage" class="menuItem hover-underline-animation">Contact</a>
        </li>
        <li>
            <select  class="form-select changeLang lang-select bg-transparent border-0 ">
                <option class="bg-color-white option" value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch</option>
                <option class="bg-color-white option" value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                <option class="bg-color-white option" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option class="bg-color-white option" value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                <option class="bg-color-white option" value="zh_HK" {{ session()->get('locale') == 'zh_HK' ? 'selected' : '' }}>Chinese</option>
                <option class="bg-color-white option" value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                <option class="bg-color-white option" value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali</option>
                <option class="bg-color-white option" value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
                <option class="bg-color-white option" value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portuguese</option>
                <option class="bg-color-white option" value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>German</option>

            </select>
        </li>

    </ul>
    <button class="hamburger">
        <!-- material icons https://material.io/resources/icons/ -->
        <svg class="svg-menu menuIcon material-icons" fill="white" style="margin-top: 0.2rem;margin-right:0.1rem " viewBox="0 0 100 80" width="40" height="18">
            <rect id="r1" width="120" height="10"></rect>
            <rect id="r2" y="30" width="120" height="10"></rect>
            <rect id="r3" y="60" width="120" height="10"></rect>
        </svg>

        <svg class="closeIcon material-icons" width='100%' height='100%' viewBox='0 0 100 20' preserveAspectRatio='none'>
            <line x1="85" y1="0" x2="95" y2="10" vector-effect="non-scaling-stroke" stroke="white" stroke-width="3" />
            <line x1="85" y1="10" x2="95" y2="0" vector-effect="non-scaling-stroke" stroke="white" stroke-width="3" />
        </svg>
    </button>

</header>

@yield('content')

<footer>
    <div class="small-padding flex lg:flex-row flex-col justify-between container">
        <div class="pb-5 lg:pb-0">
            <a href="#"><img class="w-40 pb-5" src="{{URL::asset('/img/LogoGV-Zwart.png')}}" /></a>
            <div class="flex flex-row">
                <a class="pr-5" href="#!"><img class="w-10" src="{{URL::asset('/img/instagram.png')}}" /></a>
                <a class="pr-5" href="#!"><img class="w-10" src="{{URL::asset('/img/twitter.png')}}" /></a>
                <a class="pr-5" href="#!"><img class="w-10" src="{{URL::asset('/img/facebook.png')}}" /></a>
            </div>
        </div>

        <div class="pb-5 lg:pb-0">
            <h3 class="text-2xl pb-3 font-extrabold">Pagina's</h3>
            <ul>
                <li class="pb-2"><a class="hover:text-green-500 duration-200 flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/right-thin-chevron.svg')}}" />Home</a></li>
                <li class="pb-2"><a class="hover:text-green-500 duration-200 flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/right-thin-chevron.svg')}}" />Onze producten</a></li>
                <li class="pb-2"><a class="hover:text-green-500 duration-200 flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/right-thin-chevron.svg')}}" />Over ons</a></li>
                <li class="pb-2"><a class="flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/right-thin-chevron.svg')}}" />Contact</a></li>
            </ul>
        </div>
        <div class="pb-5 lg:pb-0">
            <h3 class="text-2xl pb-3 font-extrabold">Onze winkels</h3>
            <ul>
                <li class="pb-2"><a class="flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/shop.png')}}" />Vestiging Eindhoven</a></li>
                <li class="pb-2"><a class="flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/shop.png')}}" />Vestiging Nuenen</a></li>
                <li class="pb-2"><a class="flex items-center" href="#!"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/shop.png')}}" />Vestiging Helmond</a></li>
            </ul>
        </div>

        <div class="pb-5 lg:pb-0">
            <h3 class="text-2xl pb-3 font-extrabold">Contact</h3>
            <ul>
                <li class="pb-2"><a class="flex items-center" href="tel:0621345678"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/call.png')}}" />06 123 456 78</a></li>
                <li class="pb-2"><a class="flex items-center" href="mailto:info@groenevingers.nl"><img class="pr-2" style="height: 13px;" src="{{URL::asset('/img/email.png')}}" />info@groenevingers.nl</a></li>
                <li class="pb-2"><a class="flex items-start" href="#!"><img class="pr-2 mt-1" style="height: 13px;" src="{{URL::asset('/img/map.png')}}" />
                        Vestiging Nuenen<br>
                        Klompenstraat 18<br>
                        4206 BJ Nuenen
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="bg-color-dark py-4">
        <div class="container">
            <p class="text-white font-bold">©<?php echo date("Y"); ?> groene vingers </p>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClzm1kHG7CcSjQizjJBXjKwDeVAuQYETI&callback=initMap"
async defer></script>
<script src="{{URL::asset('/owlcarousel/owl.carousel.min.js')}}" defer></script>
<script src="{{URL::asset('/js/carouselinit.js')}}" defer></script>
<script src="{{URL::asset('/js/preloader.js')}}"></script>
<script src="{{URL::asset('/js/menu.js')}}" defer defer></script>
<script src="{{URL::asset('/js/fslightbox.js')}}"></script>
<script src="{{URL::asset('/js/contact.js')}}"></script>
<!-- Translate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
<!-- Kaart -->
<script>


    function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 3,
        center: { lat: -28.024, lng: 140.887 },
    });
    const infoWindow = new google.maps.InfoWindow({
        content: "",
        disableAutoPan: true,
    });
    // Create an array of alphabetical characters used to label the markers.
    const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // Add some markers to the map.
    const markers = locations.map((position, i) => {
        const label = labels[i % labels.length];
        const marker = new google.maps.Marker({
        position,
        label,
        });

        // markers can only be keyboard focusable when they have click listeners
        // open info window when marker is clicked
        marker.addListener("click", () => {
        infoWindow.setContent(label);
        infoWindow.open(map, marker);
        });
        return marker;
    });

    const markerCluster = new markerClusterer.MarkerClusterer({ map, markers });
    // Add a marker clusterer to manage the markers.
    new MarkerClusterer({ markers, map });
    }

    const locations = [
    { lat: -31.56391, lng: 147.154312 },
    { lat: -33.718234, lng: 150.363181 },
    { lat: -33.727111, lng: 150.371124 },
    { lat: -33.848588, lng: 151.209834 },
    { lat: -33.851702, lng: 151.216968 },
    { lat: -34.671264, lng: 150.863657 },
    { lat: -35.304724, lng: 148.662905 },
    { lat: -36.817685, lng: 175.699196 },
    { lat: -36.828611, lng: 175.790222 },
    { lat: -37.75, lng: 145.116667 },
    { lat: -37.759859, lng: 145.128708 },
    { lat: -37.765015, lng: 145.133858 },
    { lat: -37.770104, lng: 145.143299 },
    { lat: -37.7737, lng: 145.145187 },
    { lat: -37.774785, lng: 145.137978 },
    { lat: -37.819616, lng: 144.968119 },
    { lat: -38.330766, lng: 144.695692 },
    { lat: -39.927193, lng: 175.053218 },
    { lat: -41.330162, lng: 174.865694 },
    { lat: -42.734358, lng: 147.439506 },
    { lat: -42.734358, lng: 147.501315 },
    { lat: -42.735258, lng: 147.438 },
    { lat: -43.999792, lng: 170.463352 },
    ];

    window.initMap = initMap;
</script>
</body>
