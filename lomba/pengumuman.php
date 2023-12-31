<?php
require "../functions.php";

if (isset($_SESSION["login"]) === true)
{
    $is_login = true;
}
else
{
    $is_login = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengumuman Pemenang Lomba</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../assets/img/logo/favicon.ico" rel="icon" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aac1e0a605.js" crossorigin="anonymous"></script>
</head>

<body>


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
      <li><a href="#about">About</a></li>
      <li class="dropdown"><a href="#"><span>Lomba</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li><a href="en.php">Essay Nasional</a></li>
          <li><a href="lct.php">LCT</a></li>
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
if ($is_login === false)
{
?>
      <li><a href="../form/signIn.php">Masuk</a></li>
      <li><a href="../form/signUp.php">Daftar</a></li>
      <?php
}
if ($is_login === true)
{
?>
      <li><a href="../administrasi/pembayaran.php">Administrasi</a></li>
      <li><a href="../form/logout.php">Logout</a></li>
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


    <!-- 404 Start -->
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
            <li>Pengumuman</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


        <!-- ======= pemenang Section ======= -->
        <section>
            <div class="container-fluid">
                <div class="container">
                        <div class="col-lg-6 wow fadeInUp content-cpc" data-wow-delay="0.1s">
                           <h6 class="text-primary text-uppercase mb-2">PEMENANG</h6>                            
                           <h1 class="display-6 mb-4 mt-1">Juara Berdasarkan Lomba</h1>
                        </div>
                </div>
                <div class="container wow fadeInUp justify-content-center" data-wow-delay="0.1s">
                    <!-- LCT -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Lomba Cepat Tepat</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">1</td>
                                    <td class="text-center align-middle" rowspan="3">SMAN 2 Bandar Lampung</td>
                                    <td>Muhammad Farhan Nurhafizh</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Zayyan Putra Akbar</td>
                                  </tr>
                                  <tr>
                                    <td>Muhamad Ayrazhan</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">2</td>
                                    <td class="text-center align-middle" rowspan="3">SMAN 10 Bandar Lampung</td>
                                    <td>Adam Nugroho Karto</td>
                                  </tr>
                                  <tr>
                                    <td>Alviya Tamima</td>
                                  </tr>
                                  <tr>
                                    <td>M. Surya Gymnastyar</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">3</td>
                                    <td class="text-center align-middle" rowspan="3">MAN Insan Cendekia Lampung</td>
                                    <td>Naufal Hadi Rizqullah</td>
                                  </tr>
                                  <tr>
                                    <td>Intan Tahta Apikan</td>
                                  </tr>
                                  <tr>
                                    <td>Keysha Avriel Abelia</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">4</td>
                                    <td class="text-center align-middle" rowspan="3">SMK PGRI 4 Bandar Lampung</td>
                                    <td>Muhammad Rafly Saputra</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Nur Indra Cahya</td>
                                  </tr>
                                  <tr>
                                    <td>Marthinus Tegar Karyadhi</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- CPC -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Competitive Programming Competition</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">1</td>
                                    <td class="text-center align-middle" rowspan="1">MAN 2 Pekanbaru</td>
                                    <td>Dimas Bayu Nugroho</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">2</td>
                                    <td class="text-center align-middle" rowspan="1">MAN 2 Pekanbaru</td>
                                    <td>Delaneira Adilla</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">3</td>
                                    <td class="text-center align-middle" rowspan="1">SMA Kharisma Bangsa</td>
                                    <td>Pradipto Pandu Maheswara </td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Photography Contest -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Photography Contest</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td scope="row" rowspan="1">1</td>
                                    <td>Herlian Dedi Suhendi</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">2</td>
                                    <td>Alisa Andini Berliana Fitri</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">Favorit</td>
                                    <td>Alisa Andini Berliana Fitri</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Mobile Legend -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Mobile Legend</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Tim</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="7">1</td>
                                    <td class="text-center align-middle" rowspan="7">Frenzy</td>
                                    <td>Aldino Wisnu Prabowo</td>
                                  </tr>
                                  <tr>
                                    <td>Aradz Bhisma Hikmat</td>
                                  </tr>
                                  <tr>
                                    <td>Brilliant Akmal Farros</td>
                                  </tr>
                                  <tr>
                                    <td>Brilliant Naufal Farros</td>
                                  </tr>
                                  <tr>
                                    <td>Fadhil Aprilian</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Dzaky Raihan</td>
                                  </tr>
                                  <tr>
                                    <td>Riski Wahyu Saputra</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="6">2</td>
                                    <td class="text-center align-middle" rowspan="6">Barudak</td>
                                    <td>Dimas Adivia</td>
                                  </tr>
                                  <tr>
                                    <td>Ferdinand Lauren</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Aksan Adhi Pratama</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Fajar Alfad</td>
                                  </tr>
                                  <tr>
                                    <td>Muhammad Faruq Arkaan</td>
                                  </tr>
                                  <tr>
                                    <td>Razka Fawwazil Hakim</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="7">3</td>
                                    <td class="text-center align-middle" rowspan="7">SMANILA E-Sport</td>
                                    <td>Azura Basel Artava Husin</td>
                                  </tr>
                                  <tr>
                                    <td>Eshan Arieyudha M</td>
                                  </tr>
                                  <tr>
                                    <td>Galang Erlangga</td>
                                  </tr>
                                  <tr>
                                    <td>N. Tahta Potenza</td>
                                  </tr>
                                  <tr>
                                    <td>Novvan Dwi Saputra</td>
                                  </tr>
                                  <tr>
                                    <td>Putu Henka Darma Putra</td>
                                  </tr>
                                  <tr>
                                    <td>Raihan Arieshandy</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- PES -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>PES</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td scope="row" rowspan="1">1</td>
                                    <td>Raja Andri Faisal Juliansyah</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">2</td>
                                    <td>Bagas Finki</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">3</td>
                                    <td>Satria</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Futsal -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Futsal</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td scope="row" rowspan="1">1</td>
                                    <td>SMAN 2 Pringsewu</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">2</td>
                                    <td>SMAN 1 Kalianda</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">3</td>
                                    <td>SMAN 1 Sidomulyo</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">Top Scorer</td>
                                    <td>Zaltan Ibrahim</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Badminton -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Badminton</h3>
                        </div>
                        <div class="card-body">
                          
                          <h5>Ganda Campuran</h5>
                              <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">1</td>
                                    <td class="text-center align-middle" rowspan="2">SMAN 5 Bandar Lampung</td>
                                    <td>Senli Ameilia</td>
                                  </tr>
                                  <tr>
                                    <td>Rafli Alghifari</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">2</td>
                                    <td class="text-center align-middle" rowspan="2">SMA Xaverius Bandar Lampung</td>
                                    <td>Vernica Giselle Wijaya</td>
                                  </tr>
                                  <tr>
                                    <td>Glenn Nova Susanto</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">3</td>
                                    <td class="text-center align-middle" rowspan="2">SMAN 16 Bandar Lampung</td>
                                    <td>Raditia Ramadhani</td>
                                  </tr>
                                  <tr>
                                    <td>Naila Prameswari</td>
                                  </tr>
                                </tbody>
                                </table>

                                <h5>Tunggal Putra</h5>
                                <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">1</td>
                                    <td class="text-center align-middle" rowspan="1">SMAN 2 Gedong Tataan</td>
                                    <td>Darius Firmansyah</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">2</td>
                                    <td class="text-center align-middle" rowspan="1">SMA BPK Penabur</td>
                                    <td>Excel Marcelo</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">3</td>
                                    <td class="text-center align-middle" rowspan="1">SMAN 3 Bandar Lampung</td>
                                    <td>Dean Fachri Fadillah</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main>


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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
