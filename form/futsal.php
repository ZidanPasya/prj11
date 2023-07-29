<?php
require "../functions.php";
$sekarang = date("Y-m-d");
if ($sekarang <= "2023-08-01") {
    echo "
        <script>
            alert('Pendaftaran lomba belum dibuka :)');
            document.location.href = '../';
        </script>
    ";
}
if ($sekarang >= "2023-08-31") {
  echo "
      <script>
          alert('Maaf pendaftaran lomba telah ditutup :(');
          document.location.href = '../';
      </script>
  ";
}
if (!$_SESSION["login"]) {
    header("location:signIn.php");
}
$id = $_SESSION["id"];
$queri = mysqli_query($conn, "SELECT * FROM peserta WHERE id = '$id'");
$data = mysqli_fetch_assoc($queri);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link href="img/Logo.png" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Futsal | PRJ x HT XI</title>
    <meta content="Daftar Futsal PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential" name="description" />
    <meta content="PRJxHT, PRJxHT 11, Daftar, Futsal, Futsal" name="keywords" />

    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="row bg-cpc m-0">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="action/futsalAct" method="post" enctype="multipart/form-data" class="formm"> 
                <h1 style="color: white">Daftar Futsal</h1>

                <fieldset class="mb-3">
                    <legend><span class="number">1</span> Profil Ketua</legend>

                    <label for="name1">Nama Lengkap</label>
                    <input required type="text" id="name1" name="name1" value="<?= $data['nama'] ?>" />

                    <label for="telp1">No.Telpon</label>
                    <input required type="text" id="telp1" name="telp1" value="<?= $data['telpon'] ?>" />

                    <label for="birth1">Tanggal lahir</label>
                    <input required type="date" id="birth1" name="birth1" />

                    <label for="gambar1">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar1" name="gambar1"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>



                    <legend><span class="number">2</span> Profil Anggota 1</legend>

                    <label for="name2">Nama Lengkap</label>
                    <input required type="text" id="name2" name="name2" />

                    <label for="telp2">No.Telpon</label>
                    <input required type="text" id="telp2" name="telp2" />

                    <label for="birth2">Tanggal lahir</label>
                    <input required type="date" id="birth2" name="birth2" />

                    <label for="gambar2">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar2" name="gambar2"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">3</span> Profil Anggota 2</legend>

                    <label for="name3">Nama Lengkap</label>
                    <input required type="text" id="name3" name="name3" />

                    <label for="telp3">No.Telpon</label>
                    <input required type="text" id="telp3" name="telp3" />

                    <label for="birth3">Tanggal lahir</label>
                    <input required type="date" id="birth3" name="birth3" />

                    <label for="gambar3">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar3" name="gambar3"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">4</span> Profil Anggota 3</legend>

                    <label for="name4">Nama Lengkap</label>
                    <input required type="text" id="name4" name="name4" />

                    <label for="telp4">No.Telpon</label>
                    <input required type="text" id="telp4" name="telp4" />

                    <label for="birth4">Tanggal lahir</label>
                    <input required type="date" id="birth4" name="birth4" />

                    <label for="gambar4">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar4" name="gambar4"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">5</span> Profil Anggota 4</legend>

                    <label for="name5">Nama Lengkap</label>
                    <input required type="text" id="name5" name="name5" />

                    <label for="telp5">No.Telpon</label>
                    <input required type="text" id="telp5" name="telp5" />

                    <label for="birth5">Tanggal lahir</label>
                    <input required type="date" id="birth5" name="birth5" />

                    <label for="gambar5">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar5" name="gambar5"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">6</span> Profil Anggota 5</legend>

                    <label for="name6">Nama Lengkap</label>
                    <input required type="text" id="name6" name="name6" />

                    <label for="telp6">No.Telpon</label>
                    <input required type="text" id="telp6" name="telp6" />

                    <label for="birth6">Tanggal lahir</label>
                    <input required type="date" id="birth6" name="birth6" />

                    <label for="gambar6">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar6" name="gambar6"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">7</span> Profil Anggota 6</legend>

                    <label for="name7">Nama Lengkap</label>
                    <input required type="text" id="name7" name="name7" />

                    <label for="telp7">No.Telpon</label>
                    <input required type="text" id="telp7" name="telp7" />

                    <label for="birth7">Tanggal lahir</label>
                    <input required type="date" id="birth7" name="birth7" />

                    <label for="gambar7">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar7" name="gambar7"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">8</span> Profil Anggota 7</legend>

                    <label for="name8">Nama Lengkap</label>
                    <input required type="text" id="name8" name="name8" />

                    <label for="telp8">No.Telpon</label>
                    <input required type="text" id="telp8" name="telp8" />

                    <label for="birth8">Tanggal lahir</label>
                    <input required type="date" id="birth8" name="birth8" />

                    <label for="gambar8">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar8" name="gambar8"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">9</span> Profil Anggota 8</legend>

                    <label for="name9">Nama Lengkap</label>
                    <input required type="text" id="name9" name="name9" />

                    <label for="telp9">No.Telpon</label>
                    <input required type="text" id="telp9" name="telp9" />

                    <label for="birth9">Tanggal lahir</label>
                    <input required type="date" id="birth9" name="birth9" />

                    <label for="gambar9">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar9" name="gambar9"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">10</span> Profil Anggota 9</legend>

                    <label for="name10">Nama Lengkap</label>
                    <input required type="text" id="name10" name="name10" />

                    <label for="telp10">No.Telpon</label>
                    <input required type="text" id="telp10" name="telp10" />

                    <label for="birth10">Tanggal lahir</label>
                    <input required type="date" id="birth10" name="birth10" />

                    <label for="gambar10">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar10" name="gambar10"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">11</span> Profil Anggota 10</legend>

                    <label for="name11">Nama Lengkap</label>
                    <input required type="text" id="name11" name="name11" />

                    <label for="telp11">No.Telpon</label>
                    <input required type="text" id="telp11" name="telp11" />

                    <label for="birth11">Tanggal lahir</label>
                    <input required type="date" id="birth11" name="birth11" />

                    <label for="gambar11">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar11" name="gambar11"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">12</span> Profil Anggota 11</legend>

                    <label for="name12">Nama Lengkap</label>
                    <input required type="text" id="name12" name="name12" />

                    <label for="telp12">No.Telpon</label>
                    <input required type="text" id="telp12" name="telp12" />

                    <label for="birth12">Tanggal lahir</label>
                    <input required type="date" id="birth12" name="birth12" />

                    <label for="gambar12">Kartu Pelajar</label>
                    <br>
                    <small id="max" class="form-text text-muted">Max 1MB</small>
                    <div class="input-group">
                        <input required type="file" class="form-control mb-3" id="gambar12" name="gambar12"
                            accept="image/x-png,image/gif,image/jpeg" />
                    </div>

                    <legend><span class="number">13</span> Profil Pendamping 1</legend>

                    <label for="name13">Nama Lengkap</label>
                    <input required type="text" id="name13" name="name13" />

                    <label for="telp13">No.Telpon</label>
                    <input required type="text" id="telp13" name="telp13" />

                    <legend><span class="number">14</span> Profil Pendamping 2</legend>

                    <label for="name14">Nama Lengkap</label>
                    <input required type="text" id="name14" name="name14" />

                    <label for="telp14">No.Telpon</label>
                    <input required type="text" id="telp14" name="telp14" />

                    <legend><span class="number">15</span> Profil Tim</legend>

                    <label for="username">Email</label>
                    <input required type="email" id="username" name="username" value="<?= $data['email'] ?>" />

                    <label for="school">Instansi</label>
                    <input required type="text" id="school" name="school" />

                    <label for="namaTim">Nama Tim</label>
                    <input required type="text" id="namaTim" name="namaTim" />
                </fieldset>

                <br>

                <div class="row">
                    <div class="col">
                        <button onclick="javascript:history.back()" type="button" class="btn-danger"><span
                                class="text-light">Back</span></button>
                    </div>
                    <div class="col">
                        <button type="submit">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-0 col-md-3"></div>
    </div>
</body>

</html>