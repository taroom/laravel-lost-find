<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">eNno</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Cari</a>
            <ul>
              <li><a href="#">Menemukan Barang</a></li>
              <li><a href="#">Mencari Barang</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>


          <li class="drop-down"><a href="">User</a>
            @guest
            <ul>
              <li><a href="{{ route('login') }}">Login</a></li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a href="{{ route('register') }}">Registrasi</a>
                  </li>
              @endif
            </ul>
            @else
                    <ul>
                      <li><a href="#">{{ Auth::user()->name }}</a></li>
                      <li class="drop-down"><a href="#">Sedang</a>
                        <ul>
                          <li><a href="#">Menemukan Barang</a></li>
                          <li><a href="#">Mencari Barang</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form></li>
                    </ul>
              @endguest
          </li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->