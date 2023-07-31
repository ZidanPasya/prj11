<?php
    $sql = mysqli_connect('localhost','root','','prj');
    session_start();
    if(isset($_GET['logout'])){
    session_destroy();
    echo '<script> location.replace("index.php"); </script>';
    }

    //tampilan jika ada Session
    if(isset($_SESSION['divisi'])) {
    $div = $_SESSION['divisi'];
    ?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PRJXHT</title>
        <link rel="stylesheet" href="assets/app.css"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">PRJXHT</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav logo-top">
                                <a class="nav-link" href="?logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <section class="section">
            <div class="container">


            </td>
            <div class="row" id="basic-table">
                <div class="col-12 col-md-12 py-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?=$div?></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Divisi</th>
                                                <?php if($div != "Essay Nasional"){ ?>
                                                <th>Nama Tim</th>
                                                <?php } ?>
                                                <th>Nama Pendaftar</th>
                                                <?php if($div == "Essay Nasional"){ ?>
                                                <th>Universitas</th>
                                                <?php } ?>
                                                <?php if($div != "poster"){ ?>
                                                <th>Bukti Pembayaran</th>
                                                <?php } ?>
                                                <?php if($div == "photography" || $div == "poster"){?>
                                                <th>Karya</th>
                                                <?php } ?>
                                                <?php if($div == "Essay Nasional"){ ?>
                                                <th>Twibbon</th>
                                                <?php } ?>
                                                <th>Status Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $que = "SELECT pendaftaran.id, pendaftaran.divisi,pendaftaran.nama_tim, pendaftaran.sekolah , peserta.nama,pendaftaran.buktiPembayaran, pendaftaran.statusPembayaran, pendaftaran.karya, pendaftaran.twibbon, pendaftaran.sekolah,pendaftaran.email FROM pendaftaran INNER JOIN peserta ON pendaftaran.id_peserta = peserta.id WHERE divisi LIKE '%$div'";
                                                $data = mysqli_query($sql, $que);
                                                $j=1;
                                                while($i = mysqli_fetch_array($data)){
                                                $img = preg_replace('/^..\/..\/...\//i', '', $i['buktiPembayaran']);
                                                $karya = preg_replace('/^..\/..\/...\//i', '', $i['karya']);
                                                $twibbon = preg_replace('/^..\/..\/...\//i', '', $i['twibbon']);
                                                ?>
                                            <tr>
                                                <td><?=$j?></td>
                                                <td class="text-bold-500"><?=$i['divisi'];?></td>
                                                <?php if($div != "Essay Nasional"){ ?>
                                                <td class="text-bold-500"><?=$i['nama_tim'];?></td>
                                                <?php } ?>
                                                <td class="text-bold-500"><?=$i['nama'];?></td>
                                                <?php if($div == "Essay Nasional"){ ?>
                                                <td class="text-bold-500"><?=$i['sekolah'];?></td>
                                                <?php } ?>
                                                <?php if($div != "poster"){ ?>
                                                <td class="text-bold-500">
                                                    <?php
                                                        if ($i['buktiPembayaran'] == NULL) {?>
                                                    Belum Transfer
                                                    <?php
                                                        }else{?>
                                                    <img loading="lazy" width="100" height="100" src="../administrasi/bukti_pembayaran/<?=$img?>">
                                                    <?php } ?>
                                                </td>
                                                <?php } if($div == "photography" || $div == "poster"){?>
                                                <td class="text-bold-500">
                                                    <img loading="lazy" width="100" height="100" src="../administrasi/karya/<?=$karya?>">
                                                </td>
                                                <?php } ?>
                                                <?php if($div == "Essay Nasional"){?>
                                                <td class="text-bold-500">
                                                    <img loading="lazy" width="100" height="100" src="../administrasi/twibbon/<?=$twibbon?>">
                                                </td>
                                                <?php } ?>
                                                <td class="text-bold-500">
                                                    <?php
                                                        if ($i["statusPembayaran"] == null || $i["statusPembayaran"] == 1) {
                                                        echo "Pending";
                                                        }else{
                                                        echo "Approved";
                                                        }
                                                        ?>

                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-outline-success" data-toggle="modal"
                                                        data-target="#modal<?=$i['id']; ?>">Edit</a>
                                                    <div class="modal fade" id="modal<?=$i['id']; ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Divisi</label>
                                                                            <input type="text" class="form-control"
                                                                                value="<?php echo $i['divisi']; ?>" name="divisi" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Nama Tim</label>
                                                                            <input type="text" name="namaTim" class="form-control"
                                                                                value="<?php echo $i['nama_tim']; ?>" readonly>
                                                                        </div>
                                                                        <div class="form-group mb-5">
                                                                            <label for="exampleFormControlInput1">Nama Pendaftar</label>
                                                                            <input type="text" name="nama" class="form-control"
                                                                                value="<?php echo $i['nama']; ?>" readonly>
                                                                        </div>

                                                                        <?php
                                                                            $iid =$i['id'];
                                                                            $g=1;
                                                                            $que = mysqli_query($sql,"SELECT * FROM anggota WHERE id_pendaftaran = $iid");
                                                                            while($getAnggota = mysqli_fetch_array($que)){
                                                                            $imgg = preg_replace('/^..\/..\/...\//i', '', $getAnggota['bukti_identitas']);
                                                                            ?>

                                                                        <div class="form-group">
                                                                            <div>
                                                                                <label for="exampleFormControlInput1">
                                                                                    <?php
                                                                                        if ($g>=13){
                                                                                        echo "Pendamping";
                                                                                        }else if ($div=="lct"||$div=="LCT" and $g==4){
                                                                                        echo "Pendamping";

                                                                                        }else{
                                                                                        echo "Anggota";
                                                                                        }
                                                                                        ?>

                                                                                </label>
                                                                                <input type="text" name="nama" class="form-control"
                                                                                    value="<?=$getAnggota['nama']?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div>
                                                                                <label for="exampleFormControlInput1">Nomor Handphone <?=$g?></label>
                                                                                <input type="number" name="nohp" class="form-control"
                                                                                    value="<?=$getAnggota['no_hp']?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group mb-5">
                                                                            <?php if($div == 'ml' || $div == 'ML' ){ ?>
                                                                            <label for="exampleFormControlInput1">Username <?=$g?></label>
                                                                            <input type="text" name="nama" class="form-control py-3"
                                                                                value="<?=$getAnggota['bukti_identitas']?>" readonly>
                                                                            <?php }else if($getAnggota['birth']=="0000-00-00"){
                                                                                echo "";
                                                                                }else{ ?>
                                                                            <img loading="lazy" class="py-3" width="200" height="300" src="../img/<?=$imgg?>">
                                                                            <?php } ?>
                                                                        </div>

                                                                        <?php $g++; }?>
                                                                        <div class="form-group">
                                                                            <div>
                                                                                <label for="exampleFormControlInput1">Email Tim</label>
                                                                                <input type="email" name="email" class="form-control"
                                                                                    value="<?=$i['email']?>" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div>
                                                                                <label for="exampleFormControlInput1">Sekolah</label>
                                                                                <input type="text" name="email" class="form-control"
                                                                                    value="<?=$i['sekolah']?>" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Status Pembayaran</label>
                                                                            <select name="statusPembayaran" class="form-select">
                                                                                <option value="1">Pending</option>
                                                                                <option value="2">Approved</option>
                                                                            </select>
                                                                            <input type="hidden" name="id" value="<?= $i['id']; ?>">
                                                                        </div>
                                                                        <?php
                                                                            if (isset($_POST['save'])) {
                                                                            $statusPembayaran = mysqli_real_escape_string($sql,$_POST['statusPembayaran']);
                                                                            $id = mysqli_real_escape_string($sql,$_POST['id']);
                                                                            $query = mysqli_query($sql, "UPDATE pendaftaran SET statusPembayaran = $statusPembayaran WHERE id = $id");
                                                                            if($query) {
                                                                            echo '<script> location.replace("index.php"); </script>';
                                                                            }
                                                                            }
                                                                            ?>
                                                                        <div class="col-12 d-flex justify-content-end">
                                                                            <button type="submit" name="save" class="btn btn-outline-success me-1 mb-1">Save Changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="btn btn-outline-success" data-toggle="modal"
                                                        data-target="#modall<?=$i['id']; ?>">Delete</a>
                                                    <div class="modal fade" id="modall<?=$i['id']; ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST">

                                                                        <div class="form-group">
                                                                            <p>Apakah anda yakin menghapus data tim <?=$i['nama_tim']; ?></p>
                                                                            <input type="hidden" name="id" value="<?= $i['id']; ?>">
                                                                        </div>


                                                                        <?php
                                                                            if (isset($_POST['delete'])) {
                                                                            $id = mysqli_real_escape_string($sql,$_POST['id']);
                                                                            $q1 = "DELETE FROM anggota WHERE id_pendaftaran='$id'";
                                                                            $q2 = "DELETE FROM pendaftaran WHERE id='$id'";
                                                                            if(mysqli_query($sql, $q1) &&  mysqli_query($sql, $q2)) {
                                                                            echo '<script> location.replace("index.php"); </script>';
                                                                            }
                                                                            }
                                                                            ?>
                                                                        <div class="col-12 d-flex justify-content-end">
                                                                            <button type="submit" name="delete" class="btn btn-danger me-1 mb-1">Delete</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $j++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>


    <!-- Tampilan jika belum login -->

    <?Php }else{?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <link href="../assets/img/logo/logo.png" rel="icon" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Sign In | PRJ x HT XI</title>
          <meta content="Masuk sekarang PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential" name="description" />
          <meta content="PRJxHT, PRJxHT 11, Masuk, Sign In" name="keywords" />

          <link rel="stylesheet" href="assets/css/form.css" />
          <link rel="stylesheet" href="assets/css/style.css" />
          <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

          <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
        </head>

        <body style="background-color: #132D46;">
          <div class="row">
            <div class="col-0 col-md-3"></div>
            <div class="col-12 col-md-6 mx-auto">
              <form action="" method="post">
                <h1>Masuk</h1>

                <fieldset class="mb-3">
                  <label for="username">Username</label>
                  <input required type="text" id="username" name="username" />

                  <label for="password">Password</label>
                  <input required type="password" id="password" name="password" />
                </fieldset>

                <?php
                    if(isset($_POST['username'])) {
                    $username = mysqli_real_escape_string($sql,$_POST['username']);
                    $password = mysqli_real_escape_string($sql,$_POST['password']);
                    $query = mysqli_query($sql, "SELECT * FROM admin WHERE username = '$username' AND password='$password'");
                    if($g = mysqli_fetch_array($query)){
                    $_SESSION['username'] = $username;
                    $_SESSION['divisi'] = $g['divisi'];
                    echo '<script> location.replace("index.php"); </script>';
                }else{?>

                <div>
                    <p type="button" class="btn btn-outline-danger">Invalid</p>
                </div>
                <?php
                    }
                    }
                ?>

                <button class="btn-buat" type="submit" name="submit">Masuk</button>
              </form>
            </div>
            <div class="col-0 col-md-3"></div>
          </div>
          
            <?php } ?>
        </body>
    </html>