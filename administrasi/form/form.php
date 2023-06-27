<?php
require "../../functions.php";
$id = $_POST["id"];
if ($id == null) {
  header("Location: ../pembayaran.php");
}
$queri = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id = '$id'");
$data = mysqli_fetch_assoc($queri);
// if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
//     header("Location: ../../login/login.html");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="../../img/_Logo.png" rel="icon">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validasi Pembayaran</title>

  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <html>

  <head>
    <meta charset="utf-8">
    <link href="../../img/_Logo.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <div class="row">
      <div class="col-md-12">
        <form action="formAction" method="post" enctype="multipart/form-data">
          <h1> Form Pembayaran </h1>

          <fieldset>
            <legend><span class="number ml-2">1</span>Administrasi</legend>
            <?php
            if ($data["statusPembayaran"] == 2) {
              ?>

              <label for="name">Atas Nama</label>
              <?php
              if ($data["nama_tim"] != null) {

                ?>
                <input required type="text" id="name" name="name" value=" <?= $data["nama_tim"] ?>" readonly>
                <?php
              }
              ?>

              <label for="name">Divisi</label>
              <?php
              if ($data["divisi"] != null) {

                ?>
                <input required type="text" id="telp" name="telp" value="<?= $data["divisi"] ?>" readonly>
                <?php
              }
              ?>

              <?php
              if ($data["buktiPembayaran"] != null){
                ?>
                <label class="" for="gambar">Upload Bukti Pembayaran</label>
                <img src="../bukti_pembayaran/<?php echo $data["buktiPembayaran"]; ?>" class="my-2 w-100 h-50 img-upload">

              
                <?php
              } else{
                ?>
                <label class="" for="gambar">Upload Bukti Pembayaran</label>
                <div class="input-group">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
                    accept="image/x-png,image/gif,image/jpeg" disabled>
                </div>
                <?php
              }?>

              <?php
            } else {
              ?>
              <label for="name">Atas Nama</label>
              <?php
              if ($data["nama_tim"] != null) {

                ?>
                <input required type="text" id="name" name="name" value=" <?= $data["nama_tim"] ?>" readonly>
                <?php
              }
              ?>

              <label for="name">Divisi</label>
              <?php
              if ($data["divisi"] != null) {

                ?>
                <input required type="text" id="telp" name="telp" value="<?= $data["divisi"] ?>" readonly>
                <?php
              }
              ?>

              <?php
              if ($data["buktiPembayaran"] != null){
                ?>
                <label class="" for="gambar">Upload Bukti Pembayaran</label>
                <img src="../bukti_pembayaran/<?php echo $data["buktiPembayaran"]; ?>" class="my-2 w-100 h-50 img-upload">

                
        
                <?php
              } else{
                ?>
                <label class="" for="gambar">Upload Bukti Pembayaran</label>
                <div class="input-group">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
                    accept="image/x-png,image/gif,image/jpeg">
                </div>
                <?php
              }?>

              <?php
            }
            ?>
          </fieldset>
          <?php
              if ($data['buktiPembayaran'] == null) {
                ?>
          <div class="row">
            <div class="col">
            <button onclick="javascript:history.back()" type="button" class="btn-danger"><span
                  class="text-light">Back</span></button>
            </div>
            <div class="col">
              
                <button type="submit">Kirim</button>
                
            </div>

          </div>
          <?php
              }
              else {
              ?>
              <button onclick="javascript:history.back()" type="button" class="btn-danger"><span
                  class="text-light">Back</span></button>
              <?php
              }
                ?>
        </form>
      </div>
    </div>

  </body>

  </html>

</body>

</html>