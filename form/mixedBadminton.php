<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="img/_Logo.png" rel="icon" />
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
  <div class="row">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="mixedBadmintonAction" method="post">
        <h1>Daftar Badminton Ganda Campuran</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil Ketua</legend>

          <label for="name">Nama Lengkap</label>
          <input required type="text" id="name" name="name" />

          <label for="telp">No.Telpon</label>
          <input required type="number" id="telp" name="telp" />

          <label for="school">Instansi</label>
          <input required type="text" id="school" name="school" />

          <label for="birth">Tanggal lahir</label>
          <input required type="date" id="birth" name="birth" />

          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar" name="gambar"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>

          <label for="buktibayar">
            Bukti Pembayaran (Screenshot)
          </label>
          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="buktibayar" name="buktibayar"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>

          <legend><span class="number">2</span> Profil Anggota 2</legend>

          <label for="name2">Nama Lengkap</label>
          <input required type="text" id="name2" name="name2" />

          <label for="telp2">No.Telpon</label>
          <input required type="number" id="telp2" name="telp2" />

          <label for="school2">Instansi</label>
          <input required type="text" id="school2" name="school2" />

          <label for="birth2">Tanggal lahir</label>
          <input required type="date" id="birth2" name="birth2" />

          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar2" name="gambar2"
              accept="image/x-png,image/gif,image/jpeg" />
          </div>

          <legend><span class="number">3</span> Profil Tim</legend>

          <label for="username">Email</label>
          <input required type="email" id="username" name="username" />

          <label for="namaTim">Nama Tim</label>
          <input required type="text" id="namaTim" name="namaTim" />
        </fieldset>

        <button class="btn-buat" type="submit">Daftar</button>
      </form>
    </div>
    <div class="col-0 col-md-3"></div>
  </div>
</body>

</html>