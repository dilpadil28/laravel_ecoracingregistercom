<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Pendaftaran Resmi Eco Racing, Apa itu Eco Racing?">
  <title>@yield('title')</title>

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">

  <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1089934471521471');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1089934471521471&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HQDC07JKFL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-HQDC07JKFL');
  </script>
</head>


<body>

  @include('frontend.layouts.header')

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <header class="section-header">
        <p>Eco Racing Go Berkah No Riba</p>
      </header>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center  mt-2">
            <i class="bi bi-chat-quote-fill"></i>
            Maka jika kamu tidak mengerjakan(meninggalka sisa riba), maka ketahuilah, bahwa Allah dan Rasul-Nya akan
            memerangimu. Dan jika kamu bertaubat (dari pengambilan riba), maka bagimu pokok hartamu; kamu tidak
            nenganiaya dan tidak (pula) dianiaya. (QS. Al-Baqarah: 279)
            <i class="bi bi-chat-quote-fill"></i>
          </div>
          <div class="col-lg-6 text-center mt-2">
            <i class="bi bi-chat-quote-fill"></i>
            Riba itu ada 72 pintu. Yang paling ringan, seperti seorang anak berzina dengan ibunya, Dan riba yang paling
            parah adalah seseorang memberberkan kehormatan saudaranya sesama muslim. (HR. Thabrani dalam al-Ausath)
            <i class="bi bi-chat-quote-fill"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#hero" class="logo scrollto d-flex align-items-center">
              <img src="{{ url('public/public/image/logo.png')  }}" alt="Eco Racing">
              <span>Eco Racing Regiseter</span>
            </a>
            <p class="mt-4">Ini adalah sebuah website untuk mendaftar Eco Racing Secara Resmi dari PT. BEST. Salam Go
              Berkah No Riba.
            </p>
            <div class="social-links mt-3">
              <a class="whatsapp"
                href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/SinergyEcoRacingRegister' }}"
                target="_blank"><i class="bi bi-whatsapp"></i></a>
              <a class="facebook"
                href="{{ $member !== '' ? $member->facebook : 'https://www.facebook.com/Eco-Racing-Register-106847278115908/?ref=page_internal' }}"
                target="_blank"><i class="bi bi-facebook"></i></a>
              <a class="instagram"
                href="{{ $member !== '' ? $member->instagram : 'https://www.instagram.com/ecoracing.register/' }}"
                target="_blank"><i class="bi bi-instagram"></i></a>
              <a class="youtube"
                href="{{ $member !== '' ? $member->youtube : 'https://www.youtube.com/channel/UCX6TtBplzfGuh5BH7pbkKYA/videos' }}"
                target="_blank"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero" class="scrollto">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact" class="scrollto">Contact</a></li>
              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-5 col-6 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              Graha Eco Racing <br> Grand Surapati Core Blok B 9-10 B 23-25, Jl. PH.H. Mustofa No No.39, Pasirlayung,
              Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40192

            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright {{ date('Y') }} – <a
          href="https://ecoracingregister.com/{{ $member !== '' ? $member->id_member : '' }}">ecoracingregister.com</a>
        |
        <strong><span>Eco Racing Regiseter</span></strong>
        <div class="credits">
          Website <a href="https://ecoracingregister.com/{{ $member !== '' ? $member->id_member : '' }}">Support Bisnis
            Eco Racing</a>
        </div>
      </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>

</html>