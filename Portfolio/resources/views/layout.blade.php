<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/body.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/project.css">
    <link rel="stylesheet" href="/css/about.css">
    <title>My portfolio</title>
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
                    <li class="nv"><a href="{{ route('aboutme') }}" class="menu-link">À propos de moi</a></li>
                    <li class="nv"><a href="{{ route('projects') }}" class="menu-link">Mes projets</a></li>
                    <li class="nv"><a href="{{ route('register') }}" class="menu-link">Contact</a></li>
                    <li class="theme"><i class="fa-solid fa-circle-half-stroke"></i></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <ul>
            <li><a href="https://www.linkedin.com/in/laspales-epalla-ndjalla-9a5555254" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/Laspales"  target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="https://www.instagram.com/"  target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="/"><i class="fa-solid fa-file-code" target="_blank"  > </i></a></li>
        </ul>
        <div class="fili">WMYC'</div>
        <div class="fili2"><i class="fa-solid fa-code"></i></div>
        <div class="fili3"><i class="fa-solid fa-database"></i></div>
        <div class="fili4"><i class="fa-solid fa-terminal"></i></div>
        <div class="fili5"><i class="fa-solid fa-layer-group"></i></div>
    </footer>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/active_link.js') }}"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
</body>

</html>
