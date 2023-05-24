<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>TIK UPM<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar" style="z-index: 9999;">
      <ul>
        <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="index.html#about">Profil</a></li>
        <li><a class="nav-link scrollto" href="index.html#services">Kurikulum</a></li>
        <li><a class="nav-link scrollto" href="index.html#team">Pimpinan</a></li>
        <li><a href="{{ route('news') }}">Berita</a></li>
        <li class="dropdown megamenu"><a href="#"><span>Pengumpulan Data</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li>
              <a href="{{ route('dosen') }}">Data Dosen</a>
              <a href="{{ route('matkul') }}">Mata Kuliah</a>
              <a href="{{ route('beasiswa') }}">Link Beasiswa</a>
              @if(Auth::check())
              <a href="{{ route('activity.index') }}">History Aktivitas</a>
              @endif
            </li>
          </ul>
        </li>
        @if(Auth::check() && Auth::user()->role == 'admin')
        <li><a class="nav-link scrollto" href="{{ route('admin.index') }}">Akses Data</a></li>
        @endif

        <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    {{-- Login Router --}}


    @auth
    <a href="#" style="text-decoration: none; color: black">Welcome! {{ Auth()->user()->name }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
    <button class="btn-getstarted scrollto" type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      @else
      <a class="btn-getstarted scrollto" href="{{ route('login') }}">Login</a>
      @endauth



  </div>
</header><!-- End Header -->