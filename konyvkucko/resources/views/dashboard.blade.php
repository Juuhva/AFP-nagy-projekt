<!DOCTYPE html>
<html lang="hu">
<head>
    @include('home.head')
    <title>@yield('title', 'Custom Dashboard Title')</title> 
    <style>
        .main-home {
            padding: 5% 60% 0% 40%;
            display:flex;
        }

        .notification {
            width: 400px;
            margin-top: 20px;
            color: black;
            font-size: 1.5rem;
            text-align: right;
        }
    </style>
</head>
<body>
    <header>
        @include('home.header')
    </header>

    <section class="main-home" >
        <div class="main-text">
            @if ($fromLogin)
                <div class="notification">
                @auth
            <h1>Üdvözlünk, {{ Auth::user()->name }}!</h1>
        @endauth
                    <h1>Sikeres bejelentkezés!</h1>
                </div>
            @endif

            @if ($fromRegister)
                <div class="notification">
                @auth
            <h1>Üdvözlünk, {{ Auth::user()->name }}!</h1>
        @endauth
                    <h1>Sikeres regisztráció!</h1>
                </div>
            @endif
        </div>
    </section>

    <script src="{{ asset('javascript.js') }}"></script>
</body>
</html>
