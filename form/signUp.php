<?php 
  require "../functions.php";

  if(isset($_POST["submit"])){
    if(register($_POST) >= 0){
      echo "
        <script>
            alert('Akun berhasil ditambah')
            document.location.href = 'signIn.php';
        </script>
			";
    }
    else{
      echo "
        <script>
            alert('Akun gagal ditambah')
            document.location.href = 'signUp.php';
        </script>
      ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="../assets/img/logo/logo.png" rel="icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | PRJ x HT XI</title>
  <meta content="Daftarkan dirimu PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential" name="description" />
  <meta content="PRJxHT, PRJxHT 11, Daftar, Sign Up" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="row bg-cpc m-0">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="" method="post" class="formm">
        <h1 style="color: white">Pendaftaran Akun Peserta</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil</legend>

          <label for="email">Email</label>
          <input required type="email" id="email" name="email" />

          <label for="name">Nama Lengkap</label>
          <input required type="text" id="name" name="name" />

          <label for="telpon">No.Telpon</label>
          <input required type="text" id="telpon" name="telpon" />

          <label for="password">Password</label>
          <input required type="password" pattern=".{8,12}" title="password harus 8-12 karakter" id="password" name="password" />

          <label for="confpass">Confirm Password</label>
          <input required type="password" pattern=".{8,12}" title="password harus 8-12 karakter" id="confpass" name="confpass" />
        </fieldset>
        

        <button class="btn-buat" type="submit" name="submit">Buat Akun</button>
        <br>
        <br>
        <center>
          <a href="../index.php" style=" text-decoration: underline;">Kembali</a>
          <br>
          <br>
          <a href="signIn.php">Sudah punya akun? Masuk</a>
        </center>
      </form>
    </div>
    <div class="col-0 col-md-3"></div>
  </div>
</body>

</html>