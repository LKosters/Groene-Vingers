@extends('layouts.layout')
@section('content')

    <header class="bg-center bg-fixed min-h-full object-cover w-full py-28"
            style="background-size: cover ;background-image:linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.3) 100%), url('{{URL::asset('/img/sfeer4.jpg')}}')">
        <div class="container">
            <p class="inline text-2xl text-left text-white font-bold">{{ GoogleTranslate::trans('Home -> Over ons', app()->getLocale()) }}</p>
            <br>
            <h1 class="inline text-7xl text-left text-white font-extrabold">{{ GoogleTranslate::trans('Over ons', app()->getLocale()) }}</h1>
        </div>
    </header>
    <div>

        <div class="container regular-padding lg:flex-row flex-col flex justify-between">
            <div class="lg:w-2/5 flex justify-center flex-col">
                <h2 class="text-4xl font-extrabold"> Je tuin in het zonnetje zetten</h2><br>
                <a class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. <br>
                    </br>uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </a>
            </div>
            <div class="lg:w-2/4 rounded-2xl overflow-hidden relative mt-8 lg:mt-0">
                <img class="object-cover w-full rounded-md ease-in duration-200 hover:scale-110"
                     src="{{URL::asset('/img/sfeer5.jpg')}}">

            </div>
        </div>

        <div class="regular-padding" style="background-color: #F7F7F7">
            <div class="container">
                <h2 class="text-4xl text-left text-black font-bold mb-12">{{ GoogleTranslate::trans('Krijg inspiratie', app()->getLocale()) }}</h2>
                <div class="flex justify-between lg:flex-row w-5/5 flex-col ">
                    <a data-fslightbox="gallery" class="pb-5 rounded-md" href="{{URL::asset('/img/Sfeer1.jpg')}}">
                        <div class="hovercontainer rounded-md mb-5 lg:mb-0">
                            <img class="object-cover w-full rounded-md " style="height: 430px"
                                 src="{{URL::asset('/img/Sfeer1.jpg')}}">
                            <div class="texthover font-bold text-2xl">
                                <div>{{ GoogleTranslate::trans('Bekijk', app()->getLocale()) }}</div>
                            </div>
                        </div>
                    </a>
                    <a data-fslightbox="gallery" class="pb-5 rounded-md" href="{{URL::asset('/img/Sfeer2.jpg')}}">
                        <div class="hovercontainer rounded-md mb-5 lg:mb-0">
                            <img class="object-cover w-full rounded-md " style="height: 430px"
                                 src="{{URL::asset('/img/Sfeer2.jpg')}}">
                            <div class="texthover font-bold text-2xl">
                                <div>{{ GoogleTranslate::trans('Bekijk', app()->getLocale()) }}</div>
                            </div>
                        </div>
                    </a>
                    <a data-fslightbox="gallery" class="pb-5 rounded-md" href="{{URL::asset('/img/Sfeer3.jpg')}}">
                        <div class="hovercontainer rounded-md">
                            <img class="object-cover w-full rounded-md " style="height: 430px"
                                 src="{{URL::asset('/img/Sfeer3.jpg')}}">
                            <div class="texthover font-bold text-2xl">
                                <div>{{ GoogleTranslate::trans('Bekijk', app()->getLocale()) }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-color-primary ">
            <div class="container small-padding lg:items-center flex lg:flex-row flex-col justify-between">
                <div class="lg:w-3/4">
                    <h2 class="text-4xl text-white font-extrabold pb-10">{{ GoogleTranslate::trans('Kom nu bij ons op zoek', app()->getLocale()) }}</h2>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <a class="bg-white mt-8 lg:mt-0 h-full text-lg text-center rounded-2xl ease-in duration-200 p-4 hover:text-green-500"
                   href="#!">Kom nu langs bij ons!</a>
            </div>
        </div>
        <div id="map"></div>
        <div class="col-md-4">
            <select class="form-select changeLang">
                <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch</option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                <option>language</option>
                <option value="af" {{ session()->get('locale') == 'af' ? 'selected' : '' }}>Afrikaans</option>
                <option value="ar" {{ session()->get('locale') == 'sq' ? 'selected' : '' }}>Albanian - shqip</option>
                <option value="az" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>Amharic - አማርኛ</option>
                <option value="be" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic - العربية</option>
                <option value="bg" {{ session()->get('locale') == 'an' ? 'selected' : '' }}>Aragonese - aragonés</option>
                <option value="bn" {{ session()->get('locale') == 'hy' ? 'selected' : '' }}>Armenian - հայերեն</option>
                <option value="bs" {{ session()->get('locale') == 'ast' ? 'selected' : '' }}>Asturian - asturianu</option>
                <option value="is" {{ session()->get('locale') == 'az' ? 'selected' : '' }}>Azerbaijani - azərbaycan dili</option>
                <option value="nn" {{ session()->get('locale') == 'eu' ? 'selected' : '' }}>Basque - euskara</option>
                <option value="de_CH" {{ session()->get('locale') == 'be' ? 'selected' : '' }}>Belarusian - беларуская</option>
                <option value="fr" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bengali - বাংলা</option>
                <option value="hr" {{ session()->get('locale') == 'bs' ? 'selected' : '' }}>Bosnian - bosanski</option>
                <option value="ps" {{ session()->get('locale') == 'br' ? 'selected' : '' }}>Breton - brezhoneg</option>
                <option value="en" {{ session()->get('locale') == 'bg' ? 'selected' : '' }}>Bulgarian - български</option>
                <option value="km" {{ session()->get('locale') == 'ca' ? 'selected' : '' }}>Catalan - català</option>
                <option value="et" {{ session()->get('locale') == 'ckb' ? 'selected' : '' }}>Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                <option value="da" {{ session()->get('locale') == 'zh' ? 'selected' : '' }}>Chinese - 中文</option>
                <option value="pt_BR" {{ session()->get('locale') == 'zh-HK' ? 'selected' : '' }}>Chinese (Hong Kong) - 中文（香港）</option>
                <option value="fa" {{ session()->get('locale') == 'zh-CN' ? 'selected' : '' }}>Chinese (Simplified) - 中文（简体）</option>
                <option value="nl" {{ session()->get('locale') == 'zh-TW' ? 'selected' : '' }}>Chinese (Traditional) - 中文（繁體）</option>
                <option value="sc" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Corsican</option>
                <option value="pt" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Croatian - hrvatski</option>
                <option value="fi" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Czech - čeština</option>
                <option value="ca" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Danish - dansk</option>
                <option value="tg" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Dutch - Nederlands</option>
                <option value="sw" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English</option>
                <option value="mk" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (Australia)</option>
                <option value="el" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (Canada)</option>
                <option value="sv" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (India)</option>
                <option value="hi" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (New Zealand)</option>
                <option value="oc" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (South Africa)</option>
                <option value="cs" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (United Kingdom)</option>
                <option value="lt" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>English (United States)</option>
                <option value="lv" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Esperanto - esperanto</option>
                <option value="de" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Estonian - eesti</option>
                <option value="sr_Latn" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Faroese - føroyskt</option>
                <option value="kn" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Filipino</option>
                <option value="gl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Finnish - suomi</option>
                <option value="sq" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>French - français</option>
                <option value="ka" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>French (Canada) - français (Canada)</option>
                <option value="he" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>French (France) - français (France)</option>
                <option value="ru" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>French (Switzerland) - français (Suisse)</option>
                <option value="sk" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Galician - galego</option>
                <option value="si" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Georgian - ქართული</option>
                <option value="it" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>German - Deutsch</option>
                <option value="hu" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>German (Austria) - Deutsch (Österreich)</option>
                <option value="kk" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>German (Germany) - Deutsch (Deutschland)</option>
                <option value="ro" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                <option value="es" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>German (Switzerland) - Deutsch (Schweiz)</option>
                <option value="ko" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Greek - Ελληνικά</option>
                <option value="sr_Latn_ME" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Guarani</option>
                <option value="cy" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Gujarati - ગુજરાતી</option>
                <option value="ja" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Hausa</option>
                <option value="gu" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Hawaiian - ʻŌlelo Hawaiʻi</option>
                <option value="pl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Hebrew - עברית</option>
                <option value="ms" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Hindi - हिन्दी</option>
                <option value="th" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Hungarian - magyar</option>
                <option value="mr" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Icelandic - íslenska</option>
                <option value="hy" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Indonesian - Indonesia</option>
                <option value="sl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Interlingua</option>
                <option value="sr_Cyrl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Irish - Gaeilge</option>
                <option value="mn" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Italian - italiano</option>
                <option value="nb" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Italian (Italy) - italiano (Italia)</option>
                <option value="eu" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Italian (Switzerland) - italiano (Svizzera)</option>
                <option value="ne" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Japanese - 日本語</option>
                <option value="fil" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Kannada - ಕನ್ನಡ</option>
                <option value="id" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Kazakh - қазақ тілі</option>
                <option value="tr" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Khmer - ខ្មែរ</option>
                <option value="tl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Korean - 한국어</option>
                <option value="uk" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Kurdish - Kurdî</option>
                <option value="uz_Latn" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Kyrgyz - кыргызча</option>
                <option value="ur" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Lao - ລາວ</option>
                <option value="vi" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Latin</option>
                <option value="zh_TW" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Latvian - latviešu</option>
                <option value="tk" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Lingala - lingála</option>
                <option value="zh_CN" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Lithuanian - lietuvių</option>
                <option value="ug" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Macedonian - македонски</option>
                <option value="uz_Cyrl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Malay - Bahasa Melayu</option>
                <option value="zh_HK" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Malayalam - മലയാളം</option>
                <option value="zh_TW" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Maltese - Malti</option>

            </select>
        </div>
        <html>
    </div>
@endsection
