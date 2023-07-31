<?php
require "../functions.php";
if (!$_SESSION["login"]) {
  header("location:../form/signIn.php");
}
$id = $_POST["id"];
$queri = mysqli_query($conn, "SELECT * FROM anggota WHERE id_pendaftaran = '$id'");
$queri2 = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id = '$id'");

$jumlah = mysqli_num_rows($queri);
$data2 = mysqli_fetch_assoc($queri2);



// if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
//     header("Location: ../../login/login.html");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="../assets/img/logo/logo.png" rel="icon">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Administrasi</title>

  <link rel="stylesheet" href="form/css/form.css">
  <link rel="stylesheet" href="form/css/style.css">
  <link rel="stylesheet" href="form/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<html>


<body background="cpc.jpg">

  <div class="row m-5">
    <div class="col-md-12">
      <form action="formAction" method="post" enctype="multipart/form-data" class="formm" style="animation: fadeIn 1s forwards;
  background-color: #0c2b4b;">
        <h1 style="color: white"> Daftar Anggota </h1>

        <fieldset>
          <legend style="color: white"><span class="number">1</span>Administrasi</legend>
          <?php
          if ($jumlah == 1) {
            ?>
            <?php
            $data = mysqli_fetch_assoc($queri);
            if ($data["bukti_identitas"] !== null || $data["bukti_identitas"] !== "") {

              ?>
              <label style="color: white" for="name">Nama Anggota</label>
              <?php
            } else {

              ?>
              <label style="color: white" for="name">Nama pembimbing</label>
              <?php
            }
            ?>

            <?php
            if ($data["nama"] != null) {

              ?>
              <input required type="text" id="name" name="name" value=" <?= $data["nama"] ?>" readonly>
              <?php
            }
            ?>

            <label style="color: white" for="name">Nomor Hp</label>
            <?php
            if ($data["no_hp"] != null) {

              ?>
              <input required type="text" id="telp" name="telp" value=<?= $data["no_hp"] ?> readonly>
              <?php
            }
            ?>

            <label style="color: white" for="name">Tangal Lahir</label>
            <?php
            if ($data["birth"] != null) {

              ?>
              <input required type="date" id="telp" name="telp" value=<?= $data["birth"] ?> readonly>
              <?php
            }
            ?>

            <label style="color: white" for="name">Bukti Identitas</label>
            <?php
            if ($data["bukti_identitas"] != null) {

              ?>
              <img loading="lazy" src="../img/<?php echo $data["bukti_identitas"]; ?>" class="my-2 w-100 h-50 img-upload">

              <?php
            }
            ?>
            <?php if($data2['divisi'] == "Essay Nasional" && $data2['statusPembayaran'] == 2){ ?>
              <label style="color: white" for="name">Link Pengumpulan Karya<a href="https://forms.gle/gd6yv2aFzPRBEBRy6"> Klik Disini</a></label>
            <?php } ?>
            <?php
          } else {
            ?>

            <?php
            $i = 0;

            while ($data = mysqli_fetch_assoc($queri)) {

              ?>

              <?php
              if ($data["bukti_identitas"] != null || $data["bukti_identitas"] != "") {
                if ($i == 0) {
                  ?>
                  <label style="color: white" for="name">Nama Ketua</label>
                  <?php
                  $i++;
                } else {
                  ?>
                  <label style="color: white" for="name">Nama Anggota
                    <?php
                    echo $i++; ?>
                  </label>
                  <?php
                }
                ?>
              <?php
              } else {

                ?>
                <label style="color: white" for="name">Nama pembimbing</label>
                <?php
              }
              ?>

              <?php
              if ($data["nama"] != null) {

                ?>
                <input required type="text" id="name" name="name" value=" <?= $data["nama"] ?>" readonly>
                <?php
              }
              ?>

              <label style="color: white" for="name">Nomor Hp</label>
              <?php
              if ($data["no_hp"] != null) {

                ?>
                <input required type="text" id="telp" name="telp" value=<?= $data["no_hp"] ?> readonly>
                <?php
              }
              ?>


              <?php
              if ($data["birth"] != "0000-00-00") {
                ?>
                <label style="color: white" for="name">Tangal Lahir</label>
                <input required type="date" id="telp" name="telp" value=<?= $data["birth"] ?> readonly>
                <?php
              }
              ?>


              <?php
              if ($data["bukti_identitas"] != null) {
                ?>
                <label style="color: white" for="name">Bukti Identitas</label>

                <img loading="lazy" src="../img/<?php echo $data["bukti_identitas"]; ?>" class="my-2 w-100 h-50 img-upload">

                <?php
              }
              ?>
              <?php
            }
            ?>
            <?php
          }
          ?>
          <button onclick="javascript:history.back()" type="button" class="btn-danger"><span
              class="text-light">Back</span></button>

        </fieldset>

      </form>
    </div>
  </div>

</body>

</html>