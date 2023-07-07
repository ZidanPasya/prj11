<?php
require "../functions.php";
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
  <title>Daftar Badminton Tunggal Putra | PRJ x HT XI</title>
  <meta content="Daftar Badminton Tunggal Putra PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential"
    name="description" />
  <meta content="PRJxHT, PRJxHT 11, Daftar, Badminton Tunggal Putra" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="row bg-cpc m-0">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="action/badtunggalAct" method="post" enctype="multipart/form-data" class="formm">
        <h1 style="color: white">Daftar Badminton Tunggal Putra</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil</legend>

          <label for="username">Email</label>
          <input required type="email" id="username" name="username" value="<?= $data['email'] ?>" />

          <label for="name">Nama Lengkap</label>
          <input required type="text" id="name" name="name" value="<?= $data['nama'] ?>" />

          <label for="telp">No.Telpon</label>
          <input required type="text" id="telp" name="telp" value="<?= $data['telpon'] ?>" />

          <label for="birth">Tanggal lahir</label>
          <input required type="date" id="birth" name="birth" />

          <label for="gambar">Bukti Identitas (Kartu Pelajar)</label>
          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>


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