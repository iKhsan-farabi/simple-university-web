@extends('layouts.app')

@section('content')

<section id="hero-animated" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
    <h2>Welcome to <span>TIK UPM</span></h2>
    <p>"Jurusan Teknik Informatika UPM membuka pintu menuju masa depan digital, menggabungkan kreativitas dan pemecahan masalah untuk menciptakan solusi inovatif dalam dunia teknologi."</p>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Daftar Sekarang</a>
      <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Lihat Dokumentasi</span></a>
    </div>
  </div>
</section>

<main id="main">



  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tentang Jurusan</h2>
        <p>Jurusan Teknik Informatika merupakan pilihan yang tepat bagi mereka yang tertarik menggali potensi teknologi, menciptakan solusi inovatif, dan menjadi bagian dari revolusi digital yang terus berkembang.</p>
      </div>

      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-5">
          <div class="about-img">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-7">
          <h3 class="pt-0 pt-lg-5">Jurusan Teknik Informatika: Visi, misi, akreditasi.</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li><a class="nav-link active px-3" data-bs-toggle="pill" href="#tab1">Visi</a></li>
            <li><a class="nav-link px-3" data-bs-toggle="pill" href="#tab2">Misi</a></li>
            <li><a class="nav-link px-3" data-bs-toggle="pill" href="#tab3">Akreditasi</a></li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <p class="fst-italic">Visi Jurusan Teknik Informatika</p>
  
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Menyelenggarakan program pendidikan berkualitas tinggi yang mengintegrasikan teori dan praktik dalam bidang Teknik Informatika.</p>
              </div>
   
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              <p class="fst-italic">Misi Jurusan Teknik Informatika</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Menyelenggarakan program pendidikan berkualitas tinggi yang mengintegrasikan teori dan praktik dalam bidang Teknik Informatika.</p>
              </div>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Melakukan penelitian yang berorientasi pada inovasi, penemuan, dan pengembangan teknologi informasi yang berkontribusi pada kemajuan masyarakat dan industri.</p>
              </div>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Membangun kemitraan strategis dengan industri dan lembaga terkait untuk meningkatkan kesempatan kerja dan penerapan teknologi informasi yang relevan.</p>
              </div>
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab3">
              <p class="fst-italic">Akreditasi Jurusan Teknik Informatika</p>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Jurusan Teknik Informatika memiliki akreditasi yang diakui dan mengikuti standar keunggulan dalam pendidikan dan penelitian.</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Jurusan Teknik Informatika telah memperoleh akreditasi "A" dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <p>Jurusan Teknik Informatika telah terakreditasi oleh lembaga akreditasi internasional seperti ABET (Accreditation Board for Engineering and Technology).</p>
              </div>
            </div><!-- End Tab 3 Content -->

          </div>

        </div>

      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-out">

      <div class="row g-5">

        <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
          <h3>Prospek Kerja</h3>
          <p>bidang Teknik Informatika sangat menjanjikan dengan peluang karir yang luas dan permintaan yang terus meningkat, memberikan kesempatan untuk berkembang dalam industri teknologi yang sedang berkembang pesat.</p>
          <a class="cta-btn align-self-start" href="#">Call To Action</a>
        </div>

        <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
          <div class="img">
            <img src="assets/img/cta.jpg" alt="" class="img-fluid">
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <section id="onfocus" class="onfocus">
    <div class="container-fluid p-0" data-aos="fade-up">

      <div class="row g-0">
        <div class="col-lg-6 video-play position-relative">
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6">
          <div class="content d-flex flex-column justify-content-center h-100">
            <h3>Kelebihan Masuk Jurusan Teknik Informatika</h3>
            <p class="fst-italic">
              Jurusan Teknik Informatika memiliki beberapa kelebihan yang menarik bagi para calon mahasiswa. Berikut adalah beberapa di antaranya:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Peluang karir yang luas dan beragam di industri teknologi informasi.</li>
              <li><i class="bi bi-check-circle"></i> Menjadi bagian dari inovasi dan perkembangan teknologi terkini.</li>
              <li><i class="bi bi-check-circle"></i> Gaji yang kompetitif dan kesempatan untuk pengembangan karir yang baik.</li>
              <li><i class="bi bi-check-circle"></i> Kolaborasi dengan profesional dari berbagai disiplin ilmu.</li>
              <li><i class="bi bi-check-circle"></i> Tantangan dan pertumbuhan yang konstan dalam bidang yang berkembang pesat.</li>
              <li><i class="bi bi-check-circle"></i> Fleksibilitas kerja dan keseimbangan antara pekerjaan dan kehidupan pribadi.</li>
              <li><i class="bi bi-check-circle"></i> Kontribusi dalam transformasi digital di berbagai sektor.</li>
            </ul>
            <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End On Focus Section -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="bi bi-binoculars color-cyan"></i>
            <h4>Data Scientist</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="bi bi-box-seam color-indigo"></i>
            <h4>IT Programmer</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="bi bi-brightness-high color-teal"></i>
            <h4>Network Tech</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="bi bi-command color-red"></i>
            <h4>Project Manager</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
            <i class="bi bi-easel color-blue"></i>
            <h4>CyberSecurity</h4>
          </a>
        </li><!-- End Tab 5 Nav -->
        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
            <i class="bi bi-easel color-blue"></i>
            <h4>System Analyst</h4>
          </a>
        </li><!-- End Tab 5 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Data Scientist</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-1.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>IT Programmer</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane" id="tab-3">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Network Tech</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
              </ul>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane" id="tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Project Manager</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->

        <div class="tab-pane" id="tab-5">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>CyberSecurity</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-5.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 5 -->

        <div class="tab-pane" id="tab-6">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>System Analyst</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-6.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 6 -->

      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Mata Kuliah</h2>
        <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
      </div>

      <div class="row gy-5">

        @foreach ( $matkul as $item )
        @if($item->kategori === 'Prodi')
        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="https://source.unsplash.com/random/900x700/?coding" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>{{ $item->nama }}</h3>
              </a>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
        @endif
        @endforeach


      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="testimonials-slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Nadhif Ali Ikhsani</h3>
              <h4>Fullstack Developer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Chairul Tanjung</h3>
              <h4>CEO Transmart</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Sandhika Galih</h3>
              <h4>Lecture</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content px-xl-5">
            <h3>Frequently Asked <strong>Questions</strong></h3>
            <p>
              Pertanyaan yang Sering Diajukan tentang Jurusan Teknik Informatika
            </p>
          </div>

          <div class="accordion accordion-flush px-xl-5" id="faqlist">

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apa saja mata kuliah yang diajarkan di Jurusan Teknik Informatika?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Mata kuliah yang diajarkan di Jurusan Teknik Informatika umumnya meliputi pemrograman, struktur data, basis data, jaringan komputer, sistem operasi, kecerdasan buatan, pengembangan perangkat lunak, dan topik-topik terkait lainnya.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apa prospek karir setelah lulus dari Jurusan Teknik Informatika?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Lulusan Jurusan Teknik Informatika memiliki peluang karir yang sangat baik. Mereka dapat bekerja sebagai programmer, analis sistem, desainer web, administrator jaringan, pengembang perangkat lunak, ahli keamanan informasi, dan berbagai peran profesional di industri teknologi informasi.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah Jurusan Teknik Informatika cocok untuk saya yang tidak memiliki latar belakang teknis?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Meskipun Jurusan Teknik Informatika biasanya lebih cocok untuk mereka yang memiliki minat dan latar belakang teknis, tetapi jika Anda memiliki minat yang kuat dan kemauan untuk belajar, Anda masih dapat berhasil dalam bidang ini. Banyak program studi Teknik Informatika juga menyediakan kurikulum pengantar untuk membantu mahasiswa yang tidak memiliki latar belakang teknis yang kuat.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah diperlukan keterampilan pemrograman sebelum masuk ke Jurusan Teknik Informatika?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Meskipun memiliki pengetahuan atau keterampilan pemrograman sebelumnya dapat memberikan keuntungan, tidak selalu diperlukan. Banyak program studi Jurusan Teknik Informatika dimulai dengan mengajarkan dasar-dasar pemrograman kepada mahasiswa yang tidak memiliki pengalaman sebelumnya. Pentingnya pemrograman dalam jurusan ini membuatnya menjadi fokus utama dalam kurikulum, sehingga Anda akan memiliki kesempatan untuk mempelajarinya secara mendalam selama studi.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <i class="bi bi-question-circle question-icon"></i>
                  Apakah Jurusan Teknik Informatika memiliki program magang?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Banyak program studi Jurusan Teknik Informatika menyediakan kesempatan magang sebagai bagian dari kurikulum mereka. Magang ini memberikan kesempatan bagi mahasiswa untuk mendapatkan pengalaman praktis di dunia nyata dan mengaplikasikan pengetahuan yang mereka peroleh selama studi. Selain itu, magang juga dapat membantu mahasiswa memperluas jaringan profesional mereka dan meningkatkan peluang kerja setelah lulus.
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- End F.A.Q Section -->
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Pimpinan</h2>
        <p>Pimpinan jurusan merupakan sosok yang mengemban tanggung jawab dalam mengarahkan dan mengelola jurusan, memastikan kualitas pendidikan dan pengembangan program studi, serta membimbing mahasiswa dalam mencapai kesuksesan akademik dan profesional.</p>
      </div>

      <div class="row gy-5">
        @foreach ( $pendidik as $item2 )
        @if($item2->jabatan === 'Ketua Prodi' || $item2->jabatan === 'Dekan' || $item2->jabatan === 'Rektor')
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="https://source.unsplash.com/random/900x700/?ceo" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <h4>{{ $item2->nama }}</h4>
              <span>{{ $item2->jabatan }}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endif
        @endforeach
      </div>

    </div>
  </section><!-- End Team Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h2>Contact Us</h2>
        <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
      </div>

    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="container">

      <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">

          <div class="info">
            <h3>Get in touch</h3>
            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>TIK UPM</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, Indonesia<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="footer-legal text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
@endsection