<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="img/Logo.png" rel="icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar LCT | PRJ x HT XI</title>
  <meta content="Daftar Lomba Cepat Tepat PRJ x HT XI Ignite : Unleashing the Spark of Youth Potential"
    name="description" />
  <meta content="PRJxHT, PRJxHT 11, Daftar, LCT, Lomba Cepat Tepat" name="keywords" />

  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="row">
    <div class="col-0 col-md-3"></div>
    <div class="col-12 col-md-6 mx-auto">
      <form action="action/lctAct" method="post" enctype="multipart/form-data">
        <h1>Daftar Lomba Cepat Tepat</h1>

        <fieldset class="mb-3">
          <legend><span class="number">1</span> Profil Ketua</legend>

          <label for="name1">Nama Lengkap</label>
          <input required type="text" id="name1" name="name1" />

          <label for="telp1">No.Telpon</label>
          <input required type="text" id="telp1" name="telp1" />

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
          <input required type="number" id="telp2" name="telp2" />

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
          <input required type="number" id="telp3" name="telp3" />

          <label for="birth3">Tanggal lahir</label>
          <input required type="date" id="birth3" name="birth3" />

          <label for="gambar3">Kartu Pelajar</label>
          <br>
          <small id="max" class="form-text text-muted">Max 1MB</small>
          <div class="input-group">
            <input required type="file" class="form-control mb-3" id="gambar3" name="gambar3"
              accept="image/x-png,image/gif,image/jpeg" />

          </div>


          <legend><span class="number">4</span> Pendamping</legend>

          <label for="name4">Nama Lengkap</label>
          <input required type="text" id="name4" name="name4" />

          <label for="telp4">No.Telpon</label>
          <input required type="number" id="telp4" name="telp4" />

          <legend><span class="number">5</span> Profil Tim</legend>
          <label for="username">Email</label>
          <input required type="email" id="username" name="username" />

          <label for="school">Instansi</label>
          <input required type="text" id="school" name="school" />

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