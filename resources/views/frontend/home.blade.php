@extends('frontend.layouts.app')

@section('title', 'Pendaftaran Resmi Eco Racing')

@section('content')
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">{{ $frontend->hero_title }}</h1>
        <h5 data-aos="fade-up" data-aos-delay="400" class="mt-2">
          {{ $frontend->hero_description }}
        </h5>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ url('storage/public/image/'.$frontend->hero_image )}}" class="img-fluid" style="width:80%"
          alt="{{ $frontend->hero_title }}">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Layanan</h2>
        <p>Eco Racing Register</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('frontend')}}/assets/img/values-1.png" class="img-fluid" alt="Web Eco Racing">
            <h3>Web Promosi</h3>
            <p>Setiap mendaptarkan Eco Racing berhak mendapat Website Replika, Seharga Rp. 1.000.000 Gratis ! *s&k
              berlaku
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="{{asset('frontend')}}/assets/img/values-2.png" class="img-fluid" alt="Full Support Eco Racing">
            <h3>Full Support</h3>
            <p>Kami akan membimbing anda sampai bisa di bisnis ini online maupun offline.
              dan anda akan masuk Group Ekslusif.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="{{asset('frontend')}}/assets/img/values-3.png" class="img-fluid" alt="Sosial Media Marketing">
            <h3>Sosial Media Marketing</h3>
            <p>Anda akan mendapatkan Bimbingan Facebook Ads, Instagram Ads seharga Rp. 500.000 dan Cara closing di
              Whatsapp, GRATIS.</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <header class="section-header">
      <h2>Total</h2>
      <p>Peraih Reward</p>
    </header>
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ $frontend->reward_motcash }}"
                data-purecounter-duration="1" class="purecounter"> Mitra</span>
              <p>Motor Cash 20 Juta</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ $frontend->reward_mobcash }}"
                data-purecounter-duration="1" class="purecounter"></span>
              <p>Mobil Cash 150 Juta</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ $frontend->reward_bigmocash }}"
                data-purecounter-duration="1" class="purecounter"></span>
              <p>Big MoCash 500 Juta</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ $frontend->reward_rumahcash }}"
                data-purecounter-duration="1" class="purecounter"></span>
              <p>Rumah Cash 1 Milyar</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6">
          <h3>{{ $frontend->peluang_title }}</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
          </ul>
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <p>{{ $frontend->peluang_description }}</p>

            </div>

          </div>

        </div>

        <div class="col-lg-6">
          <img src="{{ url('storage/public/image/'.$frontend->peluang_image) }}" class="img-fluid"
            alt="{{ $frontend->peluang_title }}">
        </div>

      </div><!-- End Feature Tabs -->

      <header class="section-header mt-3">
        <p>{{ $frontend->penghasilan_title }}</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <img src="{{ url('storage/public/image/'.$frontend->penghasilan_image) }}" class="img-fluid"
            alt="{{ $frontend->penghasilan_title }}">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>1. Komisi Penjualan Langsung</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>2. Komisi Pengembangan</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>3. Bonus Unlimited Flush Out</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>4. Reward Prestasi</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>5. Royalti Generasi</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>6. Royalti Prestasi & Kepemimpinan</h3>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>MENGAPA HARUS DAFTAR ECO RACING ?</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="bi bi-patch-check icon"></i>
            <h3>Legalitas & Sertifikat Halal Produk</h3>
            <p>Legalitas : <br>
              Semua dokumen perusahaan yang menyangkut legalitas dan perijinan lengkap seperti AP2LI, SIUPL/SIUP KBLI
              47999, dan Lampiran izin usaha efektif <br>
              Sertifikat : <br>
              Produk - produk seperti LVN, Habspro Elvitgo telah memiliki sertifikat Halal, jadi aman untuk dikonsumsi
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i class="bi bi-trophy icon"></i>
            <h3>Visi, Misi & Moto</h3>
            <p>Visi : <br>
              Menjadi Perusahaan bebas riba yang membantu umat terbebas dari riba. <br>
              Misi : <br>
              Melahirkan 1000 Milyader baru setiap tahun, menjadi penggerak umat bebas riba, dan memberikan produk
              berkualitas karya putra bangsa. <br>
              Moto : <br>
              "Go Berkah No Riba"</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <i class="bi bi-box-seam icon"></i>
            <h3>Produk Berkualitas</h3>
            <p>Produk - produknya berkualitas dan di butuhkan untuk sehari-hari seperti untuk kendaraan, kesehatan,
              kecantikan, pertaninan dan perternakan.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <i class="bi bi-cash icon"></i>
            <h3>Bisnis</h3>
            <p>Peluang bisnis di Eco Racing yang menjajikan, kita bisa mendapatkan pendanpatan dari Rp 100.000 - Rp
              1.000.000/hari dan mendapatkan reward motor, mobil, dan rumah secara cash.</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <i class="bi bi-shop icon"></i>
            <h3>Kantornya Milik Sendiri</h3>
            <p>Bangunan kantornya 3 ruko 4 lantai milik sendiri bukan sewa, dan sudah ada perwakilan kantor reginal,
              distributor dan stokis di berbagai kota</p>

          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="bi bi-people icon"></i>
            <h3>Marketing Plan Bagus</h3>
            <p>Marketing plannya sangat bagus sangat menguntungkan dan memudahkan para mitra / membernya untuk meraih
              impiannya</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Saya Tertarik Dengan Peluang Bisnis Ini, Berapa Investasinya?</h2>
        <p>Cukup melakukan pendaftaran 100 ribu dan pembelian Paket. Anda sudah tercatat sebagai Mitra Bisnis PT. BEST.
        </p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">Paket Basic ER</h3>
            <div class="price"><sup>Rp</sup>1.100.000<span></span></div>
            <ul>
              <li>5 PV Produk Eco seharga Rp 1,250 Juta (Produk Bebas Pilih)</li>
              <li>Bimbingan Promosi Marketing Online</li>
              <li>Modul Panduan Bisnis Eco Racing</li>
              <li>Group WhatsApp Ekslusif Support Bisnis</li>
              <li class="na">Reward 1 Motor/Umroh Seharga 20 Juta</li>
              <li>Reward 1 Mobil Seharga 150 Juta</li>
              <li>Reward 1 Mobil Seharga 500 Juta</li>
              <li class="na">Reward 1 Rumah Seharga 1 Milayar</li>
              <li>Potensi Bonus 600 Ribu/hari</li>
            </ul>
            <a target="_blank" href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/PaketBasicER' }}"
              class="btn-buy">Daftar Sekarang</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">
            <span class="featured">Terlaris</span>
            <h3 style="color: #65c600;">Paket Basic BW</h3>
            <div class="price"><sup>Rp</sup>2.100.000<span></span></div>
            <ul>
              <li>12 PV Produk Eco seharga Rp 3 Juta (Produk Bebas Pilih)</li>
              <li>Bimbingan Promosi Marketing Online</li>
              <li>Modul Panduan Bisnis Eco Racing</li>
              <li>Group WhatsApp Ekslusif Support Bisnis</li>
              <li>Reward 1 Motor/Umroh Seharga 20 Juta</li>
              <li>Reward 1 Mobil Seharga 150 Juta</li>
              <li>Reward 1 Mobil Seharga 500 Juta</li>
              <li>Reward 1 Rumah Seharga 1 Milayar</li>
              <li>Potensi Bonus 600 Ribu/hari</li>
            </ul>
            <a target="_blank" href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/PaketBasicBW' }}"
              class="btn-buy">Daftar Sekarang</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <span class="featured">Teruntung</span>
            <h3 style="color: #ff901c;">Paket Regular</h3>
            <div class="price"><sup>Rp</sup>6.100.000<span></span></div>
            <ul>
              <li>36 PV Produk Eco seharga Rp 9 Juta (Produk Bebas Pilih)</li>
              <li>Bimbingan Promosi Marketing Online</li>
              <li>Modul Panduan Bisnis Eco Racing</li>
              <li>Group WhatsApp Ekslusif Support Bisnis</li>
              <li>Reward 3 Motor/Umroh Seharga 20 Juta</li>
              <li>Reward 3 Mobil Seharga 150 Juta</li>
              <li>Reward 3 Mobil Seharga 500 Juta</li>
              <li>Reward 3 Rumah Seharga 1 Milayar</li>
              <li>Potensi Bonus 1,8 Juta/hari</li>
            </ul>
            <a target="_blank" href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/PaketRegular' }}"
              class="btn-buy">Daftar Sekarang</a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Pricing Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Pertanyaan yang sering diajukan</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-1">
                  Bagaimana cara daftar Eco Racing?
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  1. Hubungi Leader Admin Pusat dengan cara Klik Daftar Sekarang <br>
                  2. Pilih salah satu Paket yang ingin Anda ambil <br>
                  3. Nikmati Manfaat Penghemat BBM Hingga 50% dan Bonus Tanpa Batas

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq2-content-1">
                  Bagaimana Cara Menjalankan Eco Racing?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  1. Anda cukup memakai Produk ECO RACING untuk menghemat BBM Transport anda, Seperti Motor, Mobil
                  Pribadi atau Keluarga dan Kerabat Anda. <br>
                  2. Anda Jalankan Support System Online (Google Ads dan Youtube) dari kami, bisa juga anda sambil
                  mengenalkan Eco Racing ke orang orang terdekat anda. <br>
                  Dengan 2 cara tersebut, jika Anda lakukan dengan serius, Saya jamin Insya Allah Anda tidak akan lama
                  lagi menjadi Jutawan di ECO RACING, <strong>SANGAT MUDAH BUKAN?</strong>
                </div>
              </div>
            </div>



          </div>
        </div>

        <div class="col-lg-6">

          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-2">
                  Apa itu Sinergy Eco Racing ?
                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  SINERGY ECO RACING adalah aditif bahan bakar yang terbuat dari bahan-bahan organik 100% sehingga aman
                  untuk mesin dan manusia. Diluaran ada beberapa jenis penghemat BBM yg masih mengandung Zn dan Pb
                  (timbal) yang justru akan merusak Mesin dan menimbulkan kerak pada filter bensin. ECO RACING, full
                  berbahan organik sehingga mudah menyatu dengan bahan bakar untuk menaikkan oktan dan meningkatkan
                  performa mesin
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-content-3">
                  Apa manfaat Eco Racing ?
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Eco Racing bekerja membersihkan kerak dan kotoran lainnya yang menempel pada tangki bensin dan mesin
                  yang diakibatkan oleh penggunaan BBM yang tidak sesuai dengan kompresi mesinnya, Pemakaian Eco Racing
                  secara rutin akan membuat mesin kendaraan Anda akan menjadi bersih kembali seperti mesin baru, setelah
                  mesin bersih maka pembakaran akan menjadi lebih sempurna.

                  Dengan pembakaran yang sempurna maka otomatis akan membuat konsumsi BBM pun menjadi irit, tenaga dan
                  akselerasi kendaraan menjadi lebih prima, Cara pakai Eco Racing sangat mudah yaitu hanya tinggal
                  dimasukkan ke dalam tangki bahan bakar dengan dosis sesuai kebutuhan.
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>

    </div>

  </section><!-- End F.A.Q Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Portfolio</h2>
        {{-- <p>Check our latest work</p> --}}
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Sertifikat</li>
            <li data-filter=".filter-card">Peraih Reward</li>
            <li data-filter=".filter-web">Produk</li>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/sertifikat1.jpg') }}" class="img-fluid" alt="Legalitas Eco Racing">
            <div class="portfolio-info">
              <h4>Legalitas</h4>
              <p>Sertifikat</p>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/sertifikat1.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk1.jpg') }}" class="img-fluid" alt="Eco Racing">
            <div class="portfolio-info">
              <h4>Eco Racing</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk1.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Eco Racing"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/sertifikat2.jpg') }}" class="img-fluid"
              alt="Sertifikat Halal Produk Eco Racing">
            <div class="portfolio-info">
              <h4>Sertifikat Halal Produk</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/sertifikat2.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Sertifikat Halal Produk"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/reward1.jpg') }}" class="img-fluid" alt="Reward Eco Racing">
            <div class="portfolio-info">
              <h4>2. Reward Luxury 1 Milyar</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/reward1.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="2.Reward Luxury 1 Milyar"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk2.jpg') }}" class="img-fluid" alt="Eco Racing Nano Tech">
            <div class="portfolio-info">
              <h4>Eco Racing Nano Tech</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk2.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Eco Racing Nano Tech"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/sertifikat3.jpg') }}" class="img-fluid"
              alt="Sertifikat Sistem Bisnis Syariah Eco Racing">
            <div class="portfolio-info">
              <h4>Sertifikat Sistem Bisnis Syariah</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/sertifikat3.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Sertifikat Sistem Bisnis Syariah"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/reward2.jpg') }}" class="img-fluid"
              alt="Reward Motor Cash Eco Racing">
            <div class="portfolio-info">
              <h4>1. Reward Luxury 1 Milyar</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/reward2.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="1. Reward Luxury 1 Milyar"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/reward3.jpg') }}" class="img-fluid"
              alt="Reward Mobil Cash Eco Racing">
            <div class="portfolio-info">
              <h4>3. Reward Luxury 1 Milyar</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/reward3.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="3. Reward Luxury 1 Milyar"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk3.jpg') }}" class="img-fluid" alt="LVN">
            <div class="portfolio-info">
              <h4>LVN</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk3.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="LVN"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/reward4.jpg') }}" class="img-fluid"
              alt="Reward Big Mocash Eco Racing">
            <div class="portfolio-info">
              <h4>4. Reward Luxury 1 Milyar</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/reward4.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="4. Reward Luxury 1 Milyar"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk4.jpg') }}" class="img-fluid" alt="Habspro">
            <div class="portfolio-info">
              <h4>Habspro</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk4.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Habspro"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk5.jpg') }}" class="img-fluid" alt="LVN Soap">
            <div class="portfolio-info">
              <h4>LVN Soap</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk5.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="LVN Soap"><i class="bi bi-plus"></i></a>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/reward5.jpg') }}" class="img-fluid"
              alt="Reward Rumah Cash Eco Racing ">
            <div class="portfolio-info">
              <h4>5. Reward Luxury 1 Milyar</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/reward5.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="5. Reward Luxury 1 Milyar"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk6.jpg') }}" class="img-fluid" alt="Eco Farming">
            <div class="portfolio-info">
              <h4>Eco Farming</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk6.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="Eco Farming"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ url('storage/public/image/produk7.jpg') }}" class="img-fluid" alt="LVN Lipcream">
            <div class="portfolio-info">
              <h4>LVN Lipcream</h4>
              <div class="portfolio-links">
                <a href="{{ url('storage/public/image/produk7.jpg') }}" data-gallery="portfolioGallery"
                  class="portfokio-lightbox" title="LVN Lipcream"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Testimonials</h2>
        <p>Apa yang mereka katakan tentang bisnis ini</p>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Alhamdulillah tembus reward mobil cash dari Eco Racing, hanya beberapa bulan saja. Yang ingin punya
                bisnis syariah tanpa riba gabung di bisnis ini, saya bisa andapun pasti lebih bisa.
              </p>
              <div class="member mt-auto">
                <img src="{{ url('storage/public/image/fikri.jpeg') }}" class="testimonial-img" alt="">
                <h3>Fikri</h3>
                <h4>Karyawan BUMN</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Recommend banget dah bisnis ini buat kalian semua. Insyaallah benar-benar jadi pelepas hutang dan
                kelancaran sedekah. Allhamdulillah saya pribadi ga nyangka cuma dalam 3 bulanan bisa dapat Mobil Cash
                dari Eco Racing
              </p>
              <div class="member mt-auto">
                <img src="{{ url('storage/public/image/fahmi.jpeg') }}" class="testimonial-img" alt="">
                <h3>Fahmi</h3>
                <h4>Cleaning Service Mall</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Allhamdulillah setelah menjadi mitra Eco Racing jadi menambah penghasilan dan menambah irit pengeluaran
                untuk bensin dan service motor.
              </p>
              <div class="member mt-auto">
                <img src="{{ url('storage/public/image/dilpa.jpeg') }}" class="testimonial-img" alt="">
                <h3>Dilpa</h3>
                <h4>Programmer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->


  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Produk-produk kami</p>
      </header>

      <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="{{ url('storage/public/image/logoecofarming.png') }}" class="img-fluid"
              alt="eco farming">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logoecofeed.png')}}" class="img-fluid"
              alt="eco feed">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logohabspro.jpg')}}" class="img-fluid"
              alt="habspro">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logoecofarming.png')}}" class="img-fluid"
              alt="eco farming">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logolvncollagen.png')}}" class="img-fluid"
              alt="lvn collagen">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logolvnslim.png')}}" class="img-fluid"
              alt="lvn slim">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logonanooil.png')}}" class="img-fluid"
              alt="nano oil">
          </div>
          <div class="swiper-slide"><img src="{{url('storage/public/image/logoecoracing.png')}}" class="img-fluid"
              alt="eco racing">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Kontak Kami</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Nomor Handphone</h3>
                <p>{{ $member !== '' ? $member->phone : '0851-5778-8765' }}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>ecoracing.register@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Graha Eco Racing Grand Surapati Core Blok B 9-10 B 23-25, Jl. PH.H. Mustofa No No.39,
                  Pasirlayung, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40192</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Jam Buka</h3>
                <p>Senin - Minggu<br>05:00 - 22:00</p>
              </div>
            </div>


          </div>

        </div>

        <div class="col-lg-6">

          <!-- ======= Team Section ======= -->
          <section id="team" class="team">

            <div class="container" data-aos="fade-up">
              <div class="row align-content-center">

                <div class="col-12 " data-aos="fade-up" data-aos-delay="400">
                  <div class="member">
                    <div class="member-img">
                      <img
                        src="{{ $member !== '' ? url('storage/public/image/photo/'.$member->photo) : url('storage/public/image/photo/fadhiil.jpg')}}"
                        class="img-fluid rounded-circle" alt="">
                      <div class="social">
                        <a href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/SinergyEcoRacingRegister' }}"
                          target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="{{ $member !== '' ? $member->facebook : 'https://www.facebook.com/Eco-Racing-Register-106847278115908/?ref=page_internal' }}"
                          target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $member !== '' ? $member->instagram : 'https://www.instagram.com/ecoracing.register/' }}"
                          target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $member !== '' ? $member->youtube : 'https://www.youtube.com/channel/UCX6TtBplzfGuh5BH7pbkKYA/videos' }}"
                          target="_blank"><i class="bi bi-youtube"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4> <i class="bi bi-person-circle"></i>
                        {{ $member !== '' ? $member->first_name.' '. $member->last_name : 'Fadhiil M'  }}</h4>
                      <div><i class="bi bi-telephone"></i>
                        {{ $member !== '' ? $member->phone : '0851-5778-8765' }}</div>
                      <div><i class="bi bi-patch-check"></i>
                        {{ $member !== '' ? $member->id_member : 'BW4883603' }}</div>
                      <a target="_blank"
                        href="{{ $member !== '' ? $member->link_whatsapp : 'https://bit.ly/SinergyEcoRacingRegister' }}"
                        class="btn-buy mt-3">
                        <i class="bi bi-whatsapp"></i>
                        Daftar Sekarang</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </section>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection