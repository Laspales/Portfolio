<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/app.css">
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
                        <li class="nv"><a href="/">About me</a></li>
                        <li class="nv"><a href="/">Projects</a></li>
                        <li class="nv"><a href="{{ route('register') }}">Contact</a></li>
                        <li class="theme"><i class="fa-solid fa-circle-half-stroke"></i></li>
                    </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <ul>
            <li><a href="/"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="/"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="/"><i class="fa-solid fa-file-code"></i></a></li>
        </ul>
    </footer>
    
</body>

</html>
