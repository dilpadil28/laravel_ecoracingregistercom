<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="{{ url('public/public/image/logo.png') }}" alt="Pendaftaran Eco Racing">
      <span>Eco Racing</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a target="_blank" class="getstarted scrollto"
            href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/SinergyEcoRacingRegister' }}">Daftar
            Sekarang</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->