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
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <div id="lock">

            {{ $slot }}
        
    </div>
    <script>
        const btntheme = document.querySelector('.theme');

        btntheme.addEventListener('click', () => {

            const body = document.body;

            if (body.classList.contains('dark')) {

                body.classList.add('light')
                body.classList.remove('dark')

            } else if (body.classList.contains('light')) {

                body.classList.add('dark')
                body.classList.remove('light')

            }

        })
    </script>
</body>

</html>
