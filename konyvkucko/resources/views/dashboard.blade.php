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
            <h1>Kiemelt ajánlatunk</h1>
            
            <!-- Display the logged-in user information -->
            @auth
                <p>Welcome, {{ Auth::user()->name }}!</p> <!-- Display user name -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button> <!-- Logout button -->
                </form>
            @else
                <p>You are not logged in.</p>
            @endauth
        </div>
    </section>

    <script src="{{ asset('javascript.js') }}"></script>
</body>
</html>
