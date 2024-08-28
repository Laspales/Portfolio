<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/body.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
     @vite(['public/css/app.css', 'resources/js/app.js'])

</head>

<body class="light">
    <header>
        <nav class="navbar">
            <div class="connection">
                <ul class="connect">
                <li class="logo"><a href="{{ route('main') }}">
                            <i class="fa-solid fa-chevron-left"></i>Code<span id="to" style="color: #F07167">2</span>Work/
                            <i class="fa-solid fa-chevron-right"></i>
                        </a></li>
                    <li class="nv"><a href="{{ route('aboutme') }}" class="menu-link">About me</a></li>
                    <li class="nv"><a href="{{ route('projects') }}" class="menu-link">Projects</a></li>
                    <li class="nv"><a href="{{ route('register') }}" class="menu-link">Contact</a></li>
                    <li class="theme"><i class="fa-solid fa-circle-half-stroke"></i></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="lock">

            {{ $slot }}
        
    </div>
    <footer>
        <ul>
            <li><a href="/"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="/"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="/"><i class="fa-solid fa-file-code"></i></a></li>
        </ul>
        <div class="fili">WMYC'</div>
        <div class="fili2"><i class="fa-solid fa-code"></i></div>
        <div class="fili3"><i class="fa-solid fa-database"></i></div>
        <div class="fili4"><i class="fa-solid fa-terminal"></i></div>
        <div class="fili5"><i class="fa-solid fa-layer-group"></i></div>
    </footer>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/active_link.js') }}"></script>
</body>

</html>
