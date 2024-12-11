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
                        <i class="bx bxs-id-card"></i> 
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <i class="bx bx-log-in"></i>
                        
                    </a>
                </li>
            @endguest

            @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:none; border:none;">
                        <i class='bx bx-log-out' ></i>
                        </button>
                    </form>
                </li>
            @endauth
            <a href="cart.html"><i class='bx bx-cart' ></i></a>

            
        </div>