<?php

require "functions.php";

if (isset($_SESSION["login"]) === true) {
    $is_login = true;
} else {
    $is_login = false;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PRJ x HT XI | Ignite: Unleashing the Spark of Youth Potential</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/logo.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aac1e0a605.js" crossorigin="anonymous"></script>
    <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center"> -->
                <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="#"></a></i> -->
            <!-- </div> -->
            <!-- sosmed -->
            <!-- <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/Himakom_Unila" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCDQq6EJIqdvcsWK2NeXjUkQ" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                <a href="https://www.instagram.com/himakomunila" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://line.me/R/ti/p/%40xpm1487l" class="line"><i class="bi bi-line"></i></i></a>
                <a href="https://himakom.fmipa.unila.ac.id" class="website"><i class="bi bi-globe"></i></i></a>
            </div>
        </div>
    </section> -->
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img loading="lazy" src="assets/img/logo/logoWhite.png" alt="Bootstrap" width="50px" height="50px"><span
                    class="fs-3 fw-bold ms-1">PRJ x HT XI</span>
                <!-- <h1>Impact<span>.</span></h1> -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown"><a href="#lomba"><span>Lomba</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="lomba/lct.php">LCT</a></li>
                            <li><a href="lomba/cpc.php">CPC</a></li>
                            <li><a href="lomba/en.php">Essay Nasional</a></li>
                            <li><a href="lomba/poster.php">Poster</a></li>
                            <li><a href="lomba/photography.php">Photography</a></li>
                            <li><a href="lomba/ml.php">Mobile Legends</a></li>
                            <li><a href="lomba/pes.php">PES</a></li>
                            <li><a href="lomba/badminton.php">Badminton</a></li>
                            <li><a href="lomba/futsal.php">Futsal</a></li>
                        </ul>
                    </li>
                    <li><a href="#bazar">Bazar</a></li>
                    <li><a href="lomba/pengumuman.php">Pengumuman Lomba</a></li>
                    <?php
                    if ($is_login === false) {
                        ?>
                        <li><a href="form/signIn.php">Masuk</a></li>
                        <li><a href="form/signUp.php">Daftar</a></li>
                        <?php
                    }
                    if ($is_login === true) {
                        ?>
                        <li><a href="administrasi/pembayaran.php">Administrasi</a></li>
                        <li><a href="form/logout.php">Logout</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" background-image: url("assets/img/bg1.jpg")>
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Ignite: Unleashing the Spark of Youth Potential</h2>
                    <!-- <p>Tonton video panduan memakai website PRJ dibawah ini: </p> -->
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <!-- link yt pemakaian web: -->
                        <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">

                    <!-- ganti icon prj11 kalo udah ada -->
                    <img loading="lazy" src="assets/img/logo/logoWhite.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative align-items-center">
            <div class="container position-relative align-items-center">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="" class="stretched-link"
                                    style="pointer-events: none;">Pembukaan</a></h4>
                            <p>Pembukaan akan dilaksanakan pada tanggal 15 Oktober 2023</p>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clock"></i></div>
                            <h4 class="title"><a href="" class="stretched-link"
                                    style="pointer-events: none;">Pelaksanaan lomba</a>
                            </h4>
                            <p>Pelaksanaan 9 cabang lomba akan dilaksanakan mulai tanggal 14 Agustus 2023 - 21 Oktober 2023
                            </p>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-check-circle-fill"></i></div>
                            <h4 class="title"><a href="" class="stretched-link"
                                    style="pointer-events: none;">Penutupan</a></h4>
                            <p>Penutupan dilaksanakan pada tanggal 22 Oktober 2023</p>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-award"></i></div>
                            <h4 class="title"><a href="" class="stretched-link" style="pointer-events: none;">Pengumuman
                                    Pemenang</a></h4>
                            <p>Pengumuman pemenang akan dilaksanakan pada penutupan Pekan Raya Jurusan Ilmu Komputer
                                2023</p>
                        </div>
                    </div>
                    <!--End Icon Box -->


                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About</h2>
                    <p></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Apa itu Pekan Raya Jurusan Ilmu Komputer?</h3>
                        <img loading="lazy" src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p style="text-align: justify;">Dalam rangka Dies Natalis Jurusan, kami ingin mengadakan serangkaian acara besar yang
                            bersifat
                            pengembangan keilmuan sebagai refleksi dari Visi dan Misi FMIPA yang menuntut kami untuk
                            selalu menjujung
                            tinggi tentang penelitian. Dies Natalis Jurusan Ilmu Komputer ini juga merupakan momentum
                            untuk memberikan
                            kesempatan kepada para pelajar dan umum di luar sana.</p>
                        <p style="text-align: justify;">Maka melalui acara ini kami berupaya untuk mengoptimalkan kehidupan saintis dengan
                            kreatifitas yang kaya
                            akan imajinasi dalam memberikan terobosan – terobosan baru bagi perkembangan ilmu
                            pengetahuan dan
                            teknologi. Acara ini juga sebagai ajang motivasi bagi kami untuk menjadi lebih baik, dengan
                            adanya tekad
                            untuk maju dan terus memberikan manfaat bagi civitas akademik Jurusan Ilmu Komputer
                            khususnya dan civitas
                            FMIPA Universitas Lampung.</p>
                        <!-- <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-bold">
                                Keuntungan yang didapatkan jika mengikuti Pekan Raya Jurusan Ilmu Komputer 2023:
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Sertifikat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Menambah pengalaman di CV</li>
                                <li><i class="bi bi-check-circle-fill"></i>Relasi & Skill</li>
                                <li><i class="bi bi-check-circle-fill"></i>Uang Tunai</li>
                            </ul>
                            <div class="position-relative mt-4">
                                <img loading="lazy" src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                                <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Call To Action Section ======= -->
        <!-- <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                <h3>Video Teaser</h3>
                <p> Tonton video teaser Pekan Raya Jurusan Ilmu Komputer 2023</p>
            </div>
        </section> -->
        <!-- End Call To Action Section -->

        <!-- Lomba -->
        <section id="lomba" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Lomba</h2>
                    <p>Dalam Pekan Raya Jurusan Ilmu Komputer 2023 ini terdapat beberapa cabang lomba yang dapat
                        diikuti:</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-brightness-alt-high"></i>
                            </div>
                            <h3>LCT</h3>
                            <p>Lomba Cepat Tepat ini dapat diikuti oleh jenjang SMA sederajat</p>
                            <a href="lomba/lct.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-pc-display-horizontal"></i>
                            </div>
                            <h3>CPC</h3>
                            <p>Competitive Programing Competition ini dapat diikuti oleh jenjang SMA sederajat</p>
                            <a href="lomba/cpc.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-camera"></i>
                            </div>
                            <h3>Photography</h3>
                            <p>Cabang lomba photography ini dapat diikuti oleh umum</p>
                            <a href="lomba/Photography.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-file-richtext"></i>
                            </div>
                            <h3>Poster</h3>
                            <p>Cabang lomba poster ini dapat diikuti oleh umum</p>
                            <a href="lomba/poster.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <h3>Lomba Essay Nasional</h3>
                            <p>Cabang lomba essay nasional ini dapat diikuti oleh jenjang Mahasiswa</p>
                            <a href="lomba/en.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-regular fa-futbol" style='font-size:60px; margin-top: 16px;'></i>
                            </div>
                            <h3>Futsal</h3>
                            <p>Cabang lomba futsal ini dapat diikuti oleh SMA sederajat</p>
                            <a href="lomba/futsal.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img loading="lazy" src="assets/img/shuttlecock.png" style="margin-top: 15px;">
                            </div>
                            <h3>Badminton</h3>
                            <p>Cabang lomba badminton ini dapat diikuti oleh SMA sederajat</p>
                            <a href="lomba/badminton.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img loading="lazy" src="assets/img/swords2.png" style="margin-top: 17px;">
                            </div>
                            <h3>Mobile Legends</h3>
                            <p>Cabang lomba Mobile Legends ini dapat diikuti oleh umum</p>
                            <a href="lomba/ml.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img loading="lazy" src="assets/img/game.png" style="margin-top: 15px;">
                            </div>
                            <h3>PES</h3>
                            <p>Cabang lomba PES ini dapat diikuti oleh umum</p>
                            <a href="lomba/pes.php" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Services Section -->
        
        <!-- Bazar -->
        <section id="bazar" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Bazar</h2>
                    <p></p>
                </div>

                <div class="row gy-4">
                    <!-- <div class="col-lg-6"> -->
                        <center><h3>Bazar Pekan Raya Jurusan Ilmu Komputer</h3></center>
                        <div class="col-lg-6">
                            <img loading="lazy" src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img loading="lazy" src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        </div>
                        
                       

                        <div class="col"> <p style="text-align: justify;">Mulai dari cemilan yang memanjakan lidah, makanan yang mengenyangkan, serta berbagai minuman yang dapat melegakan dahaga akan kalian temukan di bazar ini. 
                            Makanya jangan lupa untuk mengunjungi bazar PRJ Ilmu Komputer. Persiapkan perut dan uang kalian untuk menikmati setiap jajanan yang ada disini!
                        </p></div>
                        <div class="col"><p class="mb-0" style="text-align: justify;">Pelaksanaan bazar tanggal 20-30 September 2023, berlokasi di parkiran FMIPA Unila. Untuk mendaftarkan tenant anda silakan klik link dibawah ini.
                        </p></div>
                        <br>
                        <a href="youtube.com" class="btn-daftar"><center><u class="mt-5" style="font-weight: 700">Pendaftaran tenant</u></center> </a>

                        
                        <!-- <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> -->
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-bold">
                                Keuntungan yang didapatkan jika mengikuti Pekan Raya Jurusan Ilmu Komputer 2023:
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Sertifikat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Menambah pengalaman di CV</li>
                                <li><i class="bi bi-check-circle-fill"></i>Relasi & Skill</li>
                                <li><i class="bi bi-check-circle-fill"></i>Uang Tunai</li>
                            </ul>
                            <div class="position-relative mt-4">
                                <img loading="lazy" src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                               <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Sponsor Section ======= -->
        <!-- <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <div class="section-header">
                    <h2>Our Sponsor:</h2>
                    <p></p>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-1.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-2.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-3.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-4.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-5.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-6.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-7.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-8.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End Sponsor Section -->
        
        <!-- Start Media Partner Section -->
        <!-- <section id="partner" class="clients">
            <div class="container" data-aos="zoom-out">
                <div class="section-header">
                    <h2>Our Media Partner:</h2>
                    <p></p>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-1.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-2.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-3.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-4.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-5.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-6.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-7.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="#"><img loading="lazy" src="assets/img/clients/client-8.png"
                                    class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End Media Partner Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <div class=" logo d-flex align-items-center">
                        <img loading="lazy" src="assets/img/himakom.png" height="80" alt="logo himakom" />
                    </div>
                    <p>Himpunan Mahasiswa Jurusan<br>Ilmu Komputer</p>
                    <div class="social-links d-flex mt-5">

                        <a href="https://twitter.com/Himakom_Unila" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCDQq6EJIqdvcsWK2NeXjUkQ" class="youtube"><i
                                class="bi bi-youtube"></i></a>
                        <a href="https://www.instagram.com/himakomunila" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://line.me/R/ti/p/%40xpm1487l" class="line"><i class="bi bi-line"></i></i></a>
                        <a href="https://himakom.fmipa.unila.ac.id" class="website"><i class="bi bi-globe"></i></i></a>
                    </div>

                </div>

                <div class="col-lg-6 col-md-10 footer-contact text-center text-md-start">
                    <h4>KONTAK</h4>
                    <p>
                        <i class="bi bi-geo-alt"></i> Gedung UKM FMIPA Unila<br>Jl. Prof. Dr. Ir. Sumantri Brojonegoro
                        No.1 Gedong
                        Meneng, Kec. Rajabasa, Kota Bandar Lampung, Indonesia</i><br>
                        <br>
                        <i class="bi bi-envelope"></i> himakomputer.unila@gmail.com<br><br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>PRJ x HT XI 2023</span></strong>. All Rights Reserved
            </div>
            <!-- <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>