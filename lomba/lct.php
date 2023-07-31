<?php
  require "../functions.php";

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

   <title>PRJ x HT XI | Lomba Cepat Tepat</title>
   <meta content="Pengumuman Lomba Cepat Tepat PRJxHT 11" name="description">
   <meta content="PRJxHT, PRJxHT 11, Lomba Cepat Tepat, LCT" name="keywords">

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
           <div class="contact-info d-flex align-items-center">
             <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
             <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
           </div>
           <div class="social-links d-none d-md-flex align-items-center">
             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
           </div>
         </div>
         </section> --><!-- End Top Bar -->
   <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
         <a class="navbar-brand" href="../index.php">
            <div class="d-flex justify-content-center align-items-center">
               <img loading="lazy" src="../assets/img/logo/logoWhite.png" alt="Bootstrap" width="50px" height="50px">
               <span class="fs-3 fw-bold ms-1">PRJ X HT XI</span>
            </div>
         </a>
         <nav id="navbar" class="navbar">
            <ul>
               <li><a href="../index.php">Home</a></li>
               <li class="dropdown">
                  <a href="#"><span>Lomba</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                     <li><a href="cpc.php">CPC</a></li>
                     <li><a href="en.php">Essay Nasional</a></li>
                     <li><a href="poster.php">Poster</a></li>
                     <li><a href="badminton.php">Badminton</a></li>
                     <li><a href="futsal.php">Futsal</a></li>
                     <li><a href="ml.php">Mobile Legends</a></li>
                     <li><a href="pes.php">PES</a></li>
                     <li><a href="photography.php">Photography</a></li>
                  </ul>
               </li>
               <li><a href="pengumuman.php">Pengumuman Lomba</a></li>
               <?php
                  if ($is_login === false) {
               ?>
               <li><a href="../form/signIn.php">Masuk</a></li>
               <li><a href="../form/signUp.php">Daftar</a></li>
               <?php
                  }
                  if ($is_login === true) {
               ?>
               <li><a href="../administrasi/pembayaran.php">Administrasi</a></li>
               <li><a href="../form/logout.php">Logout</a></li>
               <?php
                  }
               ?>
            </ul>
         </nav>
         <!-- .navbar -->
         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
   </header>
   <!-- End Header -->
   <!-- End Header -->
   <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
         <!-- <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/bg1.jpg');">
               <div class="container position-relative">
                 <div class="row d-flex justify-content-center">
                   <div class="col-lg-6 text-center">
                     <h2>Sample Inner Page</h2>
                     <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                   </div>
                 </div>
               </div>
               </div> -->
         <nav>
            <div class="container">
               <ol>
                  <li><a href="../index.php">Home</a></li>
                  <li>LCT</li>
               </ol>
            </div>
         </nav>
      </div>
      <!-- End Breadcrumbs -->
      <section class="lct">
         <div class="container" data-aos="fade-up">
            <div class="section-header">
               <h2>Lomba Cepat Tepat</h2>
            </div>
            <!-- <div class="col-lg-6">
                  <div class="content ps-0 ps-lg-5">
                    <p class="fst-bold">
                      Keuntungan yang didapatkan jika mengikuti Pekan Raya Jurusan Ilmu Komputer 2023:
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle-fill"></i> Sertifikat.</li>
                      <li><i class="bi bi-check-circle-fill"></i> Menambah pengalaman di CV</li>
                      <li><i class="bi bi-check-circle-fill"></i> Relasi & Skill</li>
                      <li><i class="bi bi-check-circle-fill"></i> Uang Tunai</li>
                    </ul>              
                    <div class="position-relative mt-4">
                      <img loading="lazy" src="assets/img/idea.png" class="img-fluid rounded-4" alt="">
                      <-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
            <!-- </div>
                  </div>
                  </div> -->
            <div class="container">
               <div class="row g-5">
                  <div class="col-lg-6 wow fadeInUp content-cpc" data-wow-delay="0.1s">
                     <h1 class="display-6 mb-3 mt-4">Deskripsi Lomba</h1>
                     <p>Lomba Cepat Tepat Komputer adalah salah satu cabang lomba di bidang akademik dalam rangkaian
                        acara Pekan Raya Jurusan X HT tahun 2023. Lomba ini diadakan untuk siswa/i SMA/MA/SMK Sederajat
                        guna mengembangkan keilmuan di bidang ilmu komputer. Materi yang dilombakan dalam Lomba Cepat
                        Tepat Komputer adalah mengenai pengetahuan dasar dalam ilmu komputer seperti sejarah komputer,
                        komunikasi data dan jaringan komputer, Microsoft Office, pengetahuan umum dalam bidang komputer,
                        sistem bilangan, perangkat lunak dan perangkat keras komputer, dasar-dasar sistem operasi,
                        matematika diskrit, serta bahasa pemrograman pseudocode. Peserta lomba ini, dituntut untuk
                        cekatan, lugas, serta tepat dalam menjawab pertanyaan-pertanyaan yang dilombakan.</p>


                     <h1 class="display-6 mb-3 mt-4">Ketentuan Umum</h1>
                     <p>
                        Ketentuan umum yang berlaku untuk kategori Lomba Cepat Tepat Komputer
                     </p>
                     <ol>
                        <li>
                           <p>
                              Peserta LCT Komputer adalah siswa/i yang duduk di kelas 1 - 3 SMA/MA/SMK/Sederajat.
                           </p>
                        </li>
                        <li>
                           <p>
                              Satu tim terdiri dari tiga orang.
                           </p>
                        </li>
                        <li>
                           <p>
                              Satu sekolah dapat mengirim lebih dari satu tim dengan maksimal 3 tim.
                           </p>
                        </li>
                        <li>
                           <p>
                              Satu tim didampingi oleh 1 orang guru pembimbing.
                           </p>
                        </li>
                     </ol>

                     <h1 class="display-6 mb-3 mt-4">Penghargaan</h1>
                     <p>Penghargaan bagi para pemenang Lomba Cepat Tepat Komputer</p>
                     <ul>
                        <li>Juara I : Rp. 1.000.000 + sertifikat penghargaan + piala</li>
                        <li>Juara II : Rp. 750.000 + sertifikat penghargaan + piala</li>
                        <li>Juara III : Rp. 500.000 + sertifikat penghargaan + piala</li>
                        <li>Seluruh peserta LCTK dan guru pembimbing akan mendapatkan e-sertifikat</li>
                     </ul>

                     <h1 class="display-6 mb-3 mt-4">Pendaftaran</h1>
                     <p>Timeline Lomba Cepat Tepat Komputer</p>
                     <ul>
                        <li>Pendaftaran Gelombang I : 1 Agustus 2023 - 31 Agustus 2023</li>
                        <li>Pendaftaran Gelombang II : 1 September 2023 - 12 September 2023</li>
                        <li>Pelaksanaan Lomba : 15 Oktober 2023</li>
                     </ul>
                     <p>Biaya pendaftaran Lomba Cepat Tepat Komputer sebesar</p>
                     <ul>
                        <li>Gelombang I : Rp. 145.000,00. per tim (Hanya untuk 5 tim pertama)</li>
                        <li>Gelombang II : Rp. 155.000,00. per tim</li>
                     </ul>
                     <p>Biaya pendaftaran harus diberikan sebelum pendaftaran ditutup dengan transfer melalui :
                     <ul>
                        <li>DANA: 082289046489 a.n. Anindya Salsabila</li>
                     </ul>
                     <p>
                        Lihat poster panduan
                        <a href="https://drive.google.com/file/d/1OFsLVJXXesgArYdBWMhB04vdroKjISxv/view?usp=sharing"
                           class="link">
                           <bold>disini</bold>
                        </a>
                        .
                     </p>
                     </p>

                     <h1 class="display-6 mb-3 mt-4">Contact Person</h1>
                     <p>Dafa Farhan Haqiqi (+62 859-1953-38649) <br /> Kyla Nisrina Anggrahini (+62 895-7018-1649)</p>
                     <br>
                     <a href="../form/lct.php" class="btn-daftar">DAFTAR SEKARANG</a>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img loading="lazy" class="img" src="assets/img/lct.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
   </main>
   <!-- End #main -->
   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
      <div class="container">
         <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
               <div class=" logo d-flex align-items-center">
                  <img loading="lazy" src="../assets/img/himakom.png" height="80" alt="logo himakom" />
               </div>
               <p>Himpunan Mahasiswa Jurusan<br>Ilmu Komputer</p>
               <div class="social-links d-flex mt-5">
                  <a href="https://twitter.com/Himakom_Unila" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.youtube.com/channel/UCDQq6EJIqdvcsWK2NeXjUkQ" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                  <a href="https://www.instagram.com/himakomunila" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="https://line.me/R/ti/p/%40xpm1487l" class="line"><i class="bi bi-line"></i></i></a>
                  <a href="https://himakom.fmipa.unila.ac.id" class="website"><i class="bi bi-globe"></i></i></a>
               </div>
            </div>
            <div class="col-lg-6 col-md-10 footer-contact text-center text-md-start">
               <h4>KONTAK</h4>
               <p>
                  <i class="bi bi-geo-alt"></i> Gedung UKM FMIPA Unila<br>Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1
                  Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Indonesia</i><br>
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