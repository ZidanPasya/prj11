<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="../assets/img/Logo.png" rel="icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar EN | PRJ x HT XI</title>
  <meta content="Daftar Essay Nasional PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential"
    name="description" />
  <meta content="PRJxHT, PRJxHT 11, Daftar, EN, Essay Nasional" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="row">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="action/enAct" method="post" enctype="multipart/form-data">
        <h1>Daftar Essay Nasional</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil</legend>

          <label for="username">Email</label>
          <input required type="email" id="username" name="username" />

          <label for="name">Nama Lengkap</label>
          <input required type="text" id="name" name="name" />

          <label for="telp">No.Telpon</label>
          <input required type="text" id="telp" name="telp" />

          <label for="school">Instansi</label>
          <input required type="text" id="school" name="school" />

          <label for="birth">Tanggal lahir</label>
          <input required type="date" id="birth" name="birth" />

          <label for="gambar">
            Bukti Identitas (Kartu Pelajar / Halaman Depan Rapot)
          </label>
          <small id="max" class="form-text text-muted">Max 1MB</small>

          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>
        </fieldset>

        <button class="btn-buat" type="submit">Daftar</button>
      </form>
    </div>
    <div class="col-0 col-md-3"></div>
  </div>
</body>

</html>