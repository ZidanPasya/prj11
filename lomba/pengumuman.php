<?php
// require "../functions.php";

// $sekarang = date("Y-m-d");
// if ($sekarang <= "2023-12-31") {
//     echo "
//         <script>
//             alert('Coming Soon :)');
//             document.location.href = '../';
//         </script>
//     ";
// }

// if (isset($_SESSION["login"]) === true) {
//     $is_login = true;
// } else {
//     $is_login = false;
// }
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
    <link href="../assets/img/Logo.png" rel="icon">

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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h6 class="display-4 text-white animated slideInDown mb-4">Pengumuman</h6>
            <h1 class="display-4 text-white animated slideInDown mb-4">Juara Lomba</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Pengumuman Juara Lomba</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <main id="main">
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
                                    <td class="text-center align-middle" rowspan="3">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">2</td>
                                    <td class="text-center align-middle" rowspan="3">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="3">3</td>
                                    <td class="text-center align-middle" rowspan="3">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
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
                                    <td class="text-center align-middle" rowspan="1">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">2</td>
                                    <td class="text-center align-middle" rowspan="1">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">3</td>
                                    <td class="text-center align-middle" rowspan="1">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- EN -->
                    <div class="card mb-3 ">
                        <div class="card-header">
                          <h3>Essay Nasional</h3>
                        </div>
                        <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Universitas</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">1</td>
                                    <td class="text-center align-middle" rowspan="1">NAMA-UNIVERSITAS</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">2</td>
                                    <td class="text-center align-middle" rowspan="1">NAMA-UNIVERSITAS</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="1">3</td>
                                    <td class="text-center align-middle" rowspan="1">NAMA-UNIVERSITAS</td>
                                    <td>NAMA-PESERTA</td>
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
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">2</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">3</td>
                                    <td>NAMA-PESERTA</td>
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
                                    <td class="text-center align-middle" scope="row" rowspan="5">1</td>
                                    <td class="text-center align-middle" rowspan="5">NAMA-TIM</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="5">2</td>
                                    <td class="text-center align-middle" rowspan="5">NAMA-TIM</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="5">3</td>
                                    <td class="text-center align-middle" rowspan="5">NAMA-TIM</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
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
                                    <th scope="col">Sekolah</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td scope="row" rowspan="1">1</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">2</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">3</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">Best Player</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">Top Score</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                  <tr>
                                    <td scope="row" rowspan="1">Best Supporter</td>
                                    <td>NAMA-SEKOLAH</td>
                                  </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- Badminton -->
                    <div class="card mb-3">
                        <div class="card-header">
                          <h3>Badminton</h3>
                        </div>
                        <div class="card-body">
                            <h5>Ganda Campuran</h5>
                            <table class="table table-hover">
                                <thead>
                                  <tr class="text-center align-middle bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                <tbody>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">1</td>
                                    <td class="text-center align-middle" rowspan="2">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">2</td>
                                    <td class="text-center align-middle" rowspan="2">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center align-middle" scope="row" rowspan="2">3</td>
                                    <td class="text-center align-middle" rowspan="2">NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="card-body">
                            <h5>Tunggal Putra</h5>
                            <table class="table table-hover">
                                <thead>
                                  <tr class="bg-warning">
                                    <th scope="col">Juara</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Nama</th>
                                  </tr>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>NAMA-SEKOLAH</td>
                                    <td>NAMA-PESERTA</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        
                <!-- ======= F.A.Q Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section> -->
        <!-- End F.A.Q Section -->



    </main>
    <!-- 404 End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="index.php">PRJ X HT</a>, 2022 Copyright
                </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <!-- <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


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