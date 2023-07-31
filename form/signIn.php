<?php
require "../functions.php";


if (isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM peserta WHERE email = '$email'");
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: ../index.php");
      exit;
    }
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
  <title>Sign In | PRJ x HT XI</title>
  <meta content="Masuk sekarang PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential" name="description" />
  <meta content="PRJxHT, PRJxHT 11, Masuk, Sign In" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body style="background-color: #dddddd;">

  <div class="row bg-cpc m-0">
    <br>
    <br>
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <br>
      <br>
      <br>
      <form action="" method="post" class="formm">
        <h1 style="color: white">Masuk Akun Peserta</h1>

        <fieldset class="mb-3">
          <label for="email">Email</label>
          <input required type="email" id="email" name="email" />

          <label for="password">Password</label>
          <input required type="password" id="password" name="password" />
        </fieldset>

        <button class="btn-buat" type="submit" name="submit">Masuk</button>
        <br>
        <br>
        <center>
        <a href="../index.php" style=" text-decoration: underline;">Kembali</a>
        <br>
        <br>
        <a href="signUp.php">Tidak punya akun? Daftar</a>
        </center>
      </form>
    </div>
    <div class="col-0 col-md-3"></div>
  </div>
</body>

</html>