<header class="primary-header">
    <nav class="navbar container">
        <a href="/">
            <img src="{{URL::asset('/img/LogoGV-wit.png')}}" class="logo" alt="logo"></img>
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
        </ul>
    </nav>

    <ul class="menu">
        <li>
            <a href="/" id="homepage" class="menuItem hover-underline-animation">Home</a>
        </li>
        <li>
            <a href="#" id="productspage" class="menuItem hover-underline-animation">Onze producten</a>
        </li>
        <li>
            <a href="/overons" id="overonspage" class="menuItem hover-underline-animation">Over ons</a>
        </li>
        <li>
            <a href="/contact" id="contactpage" class="menuItem hover-underline-animation">Contact</a>
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

<link rel="stylesheet" href="{{URL::asset('/css/menu.css')}}">
<script src="{{URL::asset('/js/menu.js')}}"></script>
