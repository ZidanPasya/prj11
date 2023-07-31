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
  <title>Daftar Badminton Ganda Campuran | PRJ x HT XI</title>
  <meta content="Daftar Badminton Ganda Campuran PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential"
    name="description" />
  <meta content="PRJxHT, PRJxHT 11, Daftar, Badminton Ganda Campuran" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="row bg-cpc m-0">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="action/badgandaAct" method="post" enctype="multipart/form-data" class="formm">
        <h1 style="color: white">Daftar Badminton Ganda Campuran</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil Ketua</legend>

          <label for="name1">Nama Lengkap</label>
          <input required type="text" id="name1" name="name1" value="<?= $data['nama'] ?>" />

          <label for="telp1">No.Telpon</label>
          <input required type="text" id="telp1" name="telp1" value="<?= $data['telpon'] ?>" />

          <label for="birth1">Tanggal lahir</label>
          <input required type="date" id="birth1" name="birth1" />

          <label for="gambar1">Kartu Pelajar</label>
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
          <small id="max" class="form-text text-muted">Max 1MB</small>
          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar2" name="gambar2"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>

          <legend><span class="number">3</span> Profil Tim</legend>

          <label for="username">Email</label>
          <input required type="email" id="username" name="username" value="<?= $data['email'] ?>" />

          <label for="namaTim">Nama Tim</label>
          <input required type="text" id="namaTim" name="namaTim" />
        </fieldset>

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