<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/welcome.css">
</head>

<body class="antialiased">
    <header class="header">
        <nav>
            <img src="img/logo.jpg" data-speedx="0.01" data-speedy="0.004" class="logo parallax">
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>

        </nav>
    </header>
    <main>
        <div class="text parallax">
            <img src="img/titlew.png" data-speedx="0.08" data-speedy="0.08" class="titleW parallax">
            <img src="img/titleb.png" data-speedx="0.09" data-speedy="0.09" class="titleB parallax">
            <img src="img/titler.png" data-speedx="0.07" data-speedy="0.07" class="titleR parallax">
            <img src="img/keyboard.png" data-speedx="0.03" data-speedy="0.004" class="keyboard parallax">
            <img src="img/silla.png" data-speedx="0.05" data-speedy="0.03" class="silla parallax">
        </div>
    </main>
    <script src="js/welcome.js"></script>
</body>

</html>
