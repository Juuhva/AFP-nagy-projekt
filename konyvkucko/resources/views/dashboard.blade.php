<!DOCTYPE html>
<html lang="hu">
<head>
    @include('home.head')
    <title>@yield('title', 'Custom Dashboard Title')</title> 
</head>
<body>
    <header>
        @include('home.header')
</header>


    <section class="main-home">
        <div class="main-text">
        @if ($fromLogin)

        <div></div>
    <h1 style="color:black; opacity:1">Sikeres bejelentkezés!</h1>
@endif

@if ($fromRegister)
    <h1 style="color:black; opacity:1;" >Sikeres regisztráció!</h1>
@endif
    
    </div>
    </section>

    <script src="{{ asset('javascript.js') }}"></script>
</body>
</html>
