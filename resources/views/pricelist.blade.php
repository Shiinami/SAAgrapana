<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PT. Sila Agung Agrapana</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/Sila Agug Agrapana.jpg" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="starter-page-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Sila Agung Agrapana</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('konstruksi') }}">Kontruksi</a></li>
                    <li><a href="{{ route('pricelist') }}">Pricelist</a></li>
                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0.8) 100%),url(assets/img/page-title-bg.webp); ">
            <div class="container position-relative">
                <h1 style="font-size:70px;">Pricelist Agrapana</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href={{ route('home') }} target="_blank">Home</a></li>
                        <li class="current">Starter Page</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        {{-- Start pricelist --}}
        <section id="pricing" class="pricing section">
            <div class="container" data-aos="fade-up">
                {{-- <div class="section-header">
          <h2>Harga</h2>
          <p>Informasi Untuk <span>selengkapnya</span></p>
        </div> --}}

                <div class="row gy-4">
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/pricelist/1.webp" class="img-fluid" alt=""
                            style="max-width:916px; height:auto;">
                    </div>
                </div><br>

                <div class="row gy-4">
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/pricelist/2.webp" class="img-fluid" alt=""
                            style="max-width:916px; height:auto;">
                    </div>
                </div><br>

            <!-- Starter Section -->
            <section id="starter-section" class="starter-section section">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4 align-items-center">
                        <!-- Kolom kiri: content text -->
                        <div class="col-lg-6">
                            <h3 style="font-weight:bold;">Kenapa Memilih PT. Sila Agung Agrapana?</h3><br>
                            <p style="font-size: 1.1rem;">
                                Kami adalah solusi terbaik untuk kebutuhan konstruksi dan arsitektur Anda.<br>
                                Berpengalaman, profesional, dan mengutamakan kepuasan pelanggan.
                            </p>
                        </div>
                        <!-- Kolom kanan: tombol dan deskripsi -->
                        <div class="col-lg-6 d-flex justify-content-end">
                            <div class="d-flex align-items-center">
                                <a href="https://wa.me/6285649838098?text=Halo%2C%20saya%20ingin%20menghubungi%20Sila%20Agung%20Agrapana%20terkait%20jasa%20konstruksi."
                                    class="btn btn-color-primary btn-style-default btn-style-round btn-size-large wd-open-popup me-3"
                                    style="background-color: #ffcc53; min-width: 160px; font-weight: 500;">
                                    Hubungi Kami
                                </a>
                                <div>
                                    <h4 class="mb-1" style="font-size: 1.8rem; font-weight:bold;">No. Telepon</h4>
                                    <p class="mb-0" style="font-size: 1.5rem;">+62 856 498 380 98 (admin)<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Starter Section -->

    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="container">
                </main>
                <footer id="footer" class="footer dark-background"
                    style="margin-top:60px; padding-top:20px; padding-bottom:10px;">
                    <div class="container" style="max-width: 900px;">
                        <div class="copyright text-center" style="font-size: 15px;">
                            <span>Perusahaan</span> <strong class="px-1 sitename">PT Sila Agung Agrapana</strong>
                            <span>2025</span>
                        </div>
                        <div class="credits text-center" style="font-size: 13px;">
                            Jasa : <a href="#hero">Kontuksi Dan Arsitektur</a>
                        </div>
                    </div>
                </footer>

                <div class="credits">


                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
