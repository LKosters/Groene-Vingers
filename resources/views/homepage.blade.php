@extends('layouts.layout')
@section('content')
    <header class="bg-center relative bg-cover min-h-screen" style="background-size: cover; background-image: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.3) 100%), url('{{URL::asset('/img/sabri-tuzcu-90wkutIxDE0-unsplash.jpg')}}')">
        <div class="container regular-padding min-h-screen flex items-center justify-center">
            <div class="flex-col flex">
                <h1 class="text-7xl lg:w-3/4 mx-auto pb-10 text-center text-white font-extrabold">Krijg meer groen in je tuin</h1>
                <a class="bg-white mx-auto text-xl text-center rounded-2xl ease-in duration-200 p-4 hover:text-green-500" href="#nieuwe-planten">Bekijk onze producten</a>
            </div>
        </div>
        <img class="absolute w-full left-0 bottom-0" src="{{URL::asset('/img/tilt.svg')}}" style="transform: rotate(180deg) rotateY(180deg);">
    </header>

    <div id="nieuwe-planten">
        <div class="container regular-padding">
            <div class="flex lg:flex-row flex-col justify-between">
                <h2 class="text-4xl font-extrabold">Nieuwe plant(en)</h2>
                <a class="bg-color-primary mt-8 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Bekijk onze producten</a>
            </div>

            <div class="owl-carousel owl-theme product-carousel small-padding">

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant1.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 1</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant2.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 2</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant3.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 3</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant4.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 4</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant5.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 5</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant6.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 6</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant7.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 7</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant8.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 8</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant9.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 9</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!">
                    <div class="rounded-2xl p-5 carousel-item bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant10.png')}}'); height: 500px">
                        <h3 class="text-2xl font-extrabold">Plant 10</h3>
                        <h4>Categorie</h4>
                        <div class="absolute bottom-5 product-slider-hover">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>


            </div>

        </div>


    </div>

    <div style="background-color: #F7F7F7">
        <div class="container regular-padding lg:flex-row flex-col flex justify-between">
            <div class="lg:w-2/5 flex justify-center flex-col">
                <h2 class="text-4xl pb-10 font-extrabold">Je tuin in het zonnetje zetten</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="lg:w-2/4 rounded-2xl overflow-hidden relative mt-8 lg:mt-0">
                <img class="rounded-2xl ease-in duration-200 hover:scale-110" src="{{URL::asset('/img/sabri-tuzcu-90wkutIxDE0-unsplash.jpg')}}" />
            </div>
        </div>
    </div>

    <div>
        <div class="container regular-padding">
            <div class="flex lg:flex-row flex-col justify-between pb-10">
                <h2 class="text-4xl font-extrabold">Het laatste nieuws</h2>
                <a class="bg-color-primary mt-8 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Bekijk alle nieuwsberichten</a>
            </div>
            <div class="flex flex-col">
                @foreach($nieuwsberichten as $key => $value)
                <div class="flex lg:flex-row flex-col gap-10 mb-10 rounded-2xl p-10 lg:h-64 w-full" style="background-color: #f7f7f7;">
                    <div class="relative rounded-2xl overflow-hidden relative lg:w-96 width-350-desktop">
                        <img style="width: 350px !important;" class="h-36 rounded-2xl object-cover h-full ease-in duration-200 lg:hover:scale-110 w-full" src="{{URL::asset('/img/sabri-tuzcu-90wkutIxDE0-unsplash.jpg')}}" />
                    </div>
                    <div class="flex justify-center flex-col ">
                        <h3 class="text-2xl pb-3 font-extrabold">{{ $value->titel }}</h3>
                        <p class="pb-3">{{ $value->content }}</p>
                        <a class="font-extrabold flex items-center button-white-arrow" href="#!">Lees meer <img class="pl-2" style="height: 15px;" src="{{URL::asset('/img/1200px-Font_Awesome_5_solid_arrow-right.png')}}" /></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-color-primary">
        <div class="container small-padding lg:items-center flex lg:flex-row flex-col justify-between">
            <div class="lg:w-3/4">
                <h2 class="text-4xl text-white font-extrabold pb-10">Kom nu bij ons op zoek</h2>
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <a class="bg-white mt-8 lg:mt-0 h-full text-lg text-center rounded-2xl ease-in duration-200 p-4 hover:text-green-500" href="#!">Kom nu langs bij ons!</a>
        </div>
    </div>

    <div class="coming-soon-popup fixed top-1/4 right-0 bg-white shadow-lg z-10 flex rounded-tl-lg rounded-bl-lg">
        <div class="bg-color-dark p-5 rounded-tl-lg rounded-bl-lg flex items-center	">
            <img style="height: 25px;" src="{{URL::asset('/img/setting.png')}}" />
        </div>
        <div class="p-5" style="width: 500px">
            <h3 class="text-2xl pb-3 font-extrabold">Onze nieuwe webshop komt eraan!</h3>
            <p>De nieuwe website is nog steeds in ontwikkeling en de webshop komt er snel aan!</p>
        </div>
    </div>
@endsection
