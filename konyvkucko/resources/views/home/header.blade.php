<a href="#" class="logo"><img src="imgs/logo.png" alt="Könyvkuckó"></a>
        <ul class="navmenu">
            <li><a href="{{url('/')}}">Főoldal</a></li>
            <li><a href="{{url('/')}}">Csak nálunk kapható</a></li>
            <li><a href="gyik.html">Tudnivalók</a></li>
            <li><a href="contact.html">Ügyfélszolgálat</a></li>
            
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            @guest
                <li>
                    <a href="{{ route('register') }}">
                        <i class="icon-register"></i> Register
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <i class="icon-login"></i> Login
                        
                    </a>
                </li>
            @endguest

            <!-- Display the Logout button only if the user is authenticated -->
            @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:none; border:none;">
                        <i class='bx bxs-log-out-circle' ></i>
                        </button>
                    </form>
                </li>
            @endauth
            <a href="{{url('/register')}}"><i class='bx bxs-id-card'></i></a>
            <a href="cart.html"><i class='bx bx-cart' ></i></a>

            
        </div>