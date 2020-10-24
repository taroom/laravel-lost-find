<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">Aplikasi Temu Barang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Testimoni</a></li>
          <li><a href="#team">Tim</a></li>
          <li class="drop-down"><a href="">Cari</a>
            <ul>
              <li><a href="#">Menemukan Barang</a></li>
              <li><a href="#">Mencari Barang</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>


          <li class="drop-down"><a href="">Pengguna</a>
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
					<li><a href="{{ url('/user-profile')}}">{{ Auth::user()->name }}</a></li>
					<li><a href="{{ url('/barang')}}">Barang</a></li>
					<li><a href="{{ url('/kategori')}}">Kategori</a></li>
					<li><a href="{{ url('/tag')}}">Tag</a></li>
					<li class="drop-down"><a href="#">Sedang</a>
					<ul>
						<li><a href="#">Menemukan Barang</a></li>
						<li><a href="#">Mencari Barang</a></li>
					</ul>
					</li>

					<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}	</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
              @endguest
          </li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Ayo Lakukan</a>

    </div>
  </header><!-- End Header -->