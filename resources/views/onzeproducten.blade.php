<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onze producten</title>

        @vite('resources/css/app.css')
        @vite('resources/css/onzeproducten.css')

    </head>
    <body>
    @extends('layouts.menu')
    @section('nav')

    @endsection
        <header class="bg-center bg-fixed min-h-full" style="background-color: green;">
            <div class="container">
                <p class="inline text-2xl text-left text-white font-bold" >Home -> Onze producten</p><br>
                <h1 class="inline text-7xl text-left text-white font-extrabold" >Onze producten</h1>
            </div>
        </header>

        <div class="container regular-padding">
            <div class="flex lg:flex-row flex-col">
                <a class="bg-color-primary mt-6 m-2 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Binnenplanten</a>
                <a class="bg-color-primary mt-6 m-2 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Waterplanten</a>
                <a class="bg-color-primary mt-6 m-2 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Klimplanten</a>
                <a class="bg-color-primary mt-6 m-2 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-4 hover:text-black" href="#!">Sierplanten</a>
            </div>
        </div>
        
        <div class="container">
            <div class="producten">
                <a href="/product" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant1.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 1</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant2.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 2</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant3.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 3</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant4.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 4</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant5.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 5</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant6.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 6</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>

                <a href="#!" class="mb-5">
                    <div class="product-style rounded-2xl p-5 bg-contain bg-no-repeat bg-center bg-origin-content" style="background-image: url('{{URL::asset('/img/plant7.png')}}'); height: 500px">
                        <div>
                            <h3 class="text-2xl font-extrabold">Plant 7</h3>
                            <h4>Categorie</h4>
                        </div>
                        <div class="product-btn">
                            <h4 class="text-2xl font-extrabold">$10</h4>
                            <p>Bekijk plant</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    @extends('layouts.footer')
    </body>
</html>

