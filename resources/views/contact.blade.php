@extends('layouts.layout')
@section('content')

    <header class="bg-center bg-fixed min-h-full object-cover w-full py-28"
            style="background-size: cover ;background-image:linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.3) 100%), url('{{URL::asset('/img/contact_banner.jpg')}}')">
        <div class="container">
            <p class="inline text-2xl text-left text-white font-bold">Home -> Contact</p><br>
            <h1 class="inline text-7xl text-left text-white font-extrabold">Contact</h1>
        </div>
    </header>

    <div class="container regular-bottom-padding lg:flex-row flex-col flex justify-between mt-14">
        <div class="lg:w-6/12 flex justify-center flex-col" id="accordion1">
            <h1 class="font-bold mb-4 text-2xl">Wij reageren binnen 24uur!</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque, sapien in
                ultricies gravida, sem mauris molestie lectus, ac fringilla leo odio nec nisl. Sed a lobortis purus.
                Vestibulum a sodales massa. Nulla ut nibh a erat mattis faucibus in id est. Nulla condimentum, nibh
                condimentum rhoncus blandit, lorem ligula blandit quam, sed consequat erat risus vitae nibh. Fusce
                laoreet hendrerit suscipit. Aenean porta sodales egestas. Etiam tincidunt convallis enim quis
                malesuada.</p>
            <div class="menu1 rounded-md">
                <div class="header1 font-bold rounded-md">
                    <div class="title1">Wat zijn de openingstijden?</div>
                    <span class="icon1">+</span>
                </div>
                <div class="content1 ml-2.5">
                    <p class="mb-2">
                        Donec sit amet ante nec tortor ullamcorper sagittis. Nulla nec risus tempus, malesuada mi quis,
                        sagittis quam. Aenean scelerisque magna ut risus vestibulum fermentum. Proin elementum augue id
                        consectetur congue. Phasellus sit amet nunc leo. Aenean faucibus ullamcorper purus. Nullam vel
                        euismod sem.
                    </p>
                </div>
            </div>
            <div class="menu1 mt-4 rounded-md">
                <div class="header1 font-bold rounded-md">
                    <div class="title1">Wat is jullie return policy?</div>
                    <span class="icon1">+</span>
                </div>
                <div class="content1 ml-2.5">
                    <p class="mb-2">
                        Donec sit amet ante nec tortor ullamcorper sagittis. Nulla nec risus tempus, malesuada mi quis,
                        sagittis quam. Aenean scelerisque magna ut risus vestibulum fermentum. Proin elementum augue id
                        consectetur congue. Phasellus sit amet nunc leo. Aenean faucibus ullamcorper purus. Nullam vel
                        euismod sem.
                    </p>
                </div>
            </div>
            <div class="menu1 mt-4 rounded-md ">
                <div class="header1 font-bold rounded-md ">
                    <div class="title1">Wanneer wordt mijn artikel geleverd?</div>
                    <span class="icon1">+</span>
                </div>
                <div class="content1 ml-2.5">
                    <p class="mb-2">
                        Donec sit amet ante nec tortor ullamcorper sagittis. Nulla nec risus tempus, malesuada mi quis,
                        sagittis quam. Aenean scelerisque magna ut risus vestibulum fermentum. Proin elementum augue id
                        consectetur congue. Phasellus sit amet nunc leo. Aenean faucibus ullamcorper purus. Nullam vel
                        euismod sem.
                    </p>
                </div>
            </div>
            <div class="flex flex-col border rounded-xl card p-4 mt-14 contactinfo">
                <h2 class="mb-6 text-2xl font-bold text-black-800 ml-2.5">
                    Contactinformatie
                </h2>
                <a class="flex items-center ml-2.5 font-bold mb-2" href="tel:0612345678"><img class="pr-2 imggreen"
                                                                                              style="height: 13px;"
                                                                                              src="/img/call.png">06-12345678</a>
                <a class="flex items-center ml-2.5 font-bold mb-2" href="mailto:info@groenevingers.nl"><img
                        class="pr-2 imggreen" style="height: 13px;" src="{{URL::asset('/img/email.png')}}"/>info@groenevingers.nl</a>
                <a class="flex items-start ml-2.5 font-bold" href="#!"><img class="pr-2 imggreen mt-1"
                                                                            style="height: 13px;"
                                                                            src="{{URL::asset('/img/map.png')}}"/>
                    Vestiging Nuenen<br>
                    Klompenstraat 18<br>
                    4206 BJ Nuenen
                </a>

                <h2 class="mb-6 text-2xl font-bold text-black-800 ml-2.5 mt-14">
                    Bedrijfsinformatie
                </h2>
                <p class="flex items-center ml-2.5">
                    KVK: 123456789 <br>
                    IBAN: NL69 INGB 1234 5678 90 <br>
                    BIC/SWIFT: 123456789 <br>
                    BTW: 12345689 <br>
                </p>


            </div>
        </div>
        <div class="lg:w-5/12 rounded-2xl">
            <div class="max-w-[85rem] sticky-sidebar sm:pl-6 lg:pl-8 mx-auto">

                <div class=" max-w-lg mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col border rounded-xl p-3 sm:p-5 lg:p-6 card">
                        <h2 class="font-bold mb-4 text-2xl">
                            Neem contact op
                        </h2>

                        <form>
                            <div class="grid gap-4 lg:gap-6">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-name-contacts-1" class="block text-sm text-gray-700 font-bold">Voor-
                                            en achternaam <span class="color-primary">*</span></label>
                                        <input required type="text" name="hs-firstname-contacts-1"
                                               id="hs-name-contacts-1"
                                               class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-email-contacts-1" class="block text-sm text-gray-700 font-bold ">Email
                                            <span class="color-primary">*</span></label>
                                        <input required type="email" name="hs-email-contacts-1" id="hs-email-contacts-1"
                                               autocomplete="email"
                                               class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm">
                                    </div>

                                    <div>
                                        <label for="hs-phone-number-1" class="block text-sm text-gray-700  font-bold">Telefoonnummer</label>
                                        <input type="text" name="hs-phone-number-1" id="hs-phone-number-1"
                                               class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <div>
                                    <label for="hs-about-contacts-1" class="block text-sm text-gray-700 font-bold">Bericht
                                        <span class="color-primary">*</span></label>
                                    <textarea required id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                              class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm"></textarea>
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div class="lg:w-1/3 sm:w-full mt-3 grid float-right">
                                <button type="submit"
                                        class="bg-color-primary mt-6 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-2 hover:text-black">
                                    Versturen
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>
            </div>

        </div>
    </div>
    <div class="container regular-bottom-padding lg:flex-row flex-col flex">


    </div>
    <div id="map"></div>
@endsection
