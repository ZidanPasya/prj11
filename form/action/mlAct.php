<?php
require '../../functions.php';
if (!empty($_POST["namaTim"]) && !empty($_POST["username"])) {
    $namaTim = $_POST["namaTim"];
    $mail = $_POST["username"];
    $id_pendaftaran = insert_pendaftaran($namaTim, "", $mail, 'ML', $_SESSION["id"]);

    for ($i = 1; $i <= 7; $i++) {

        $ukuranFile = $_FILES["gambar" . strval($i)]["size"];
        if ($ukuranFile > 1000000) {
            echo "<script> 
            alert('Ukuran gambar terlalu besar'); 
            location.href = '../mlAct.php';
            </script>";
            return false;
        } else {
            $nama = $_POST["name" . strval($i)];
            $telpon = $_POST["telp" . strval($i)];
            $birth = $_POST["birth" . strval($i)];

            $filename = $_FILES["gambar" . strval($i)]["name"];
            $tempname = $_FILES["gambar" . strval($i)]["tmp_name"];

            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $filename);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
                echo "
            <script>
                alert('Yang anda upload bukan gambar');
                location.href = '../mlAct.php';
            </script>
        ";
                return false;
            }
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;

            move_uploaded_file($tempname, "../../img/" . $namaFileBaru);
            insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran, $instansi);
            if (update_identitas($namaFileBaru, $nama)) {
                echo "<script>
                    alert('Anda telah berhasil melakukan pendaftaran lomba, silahkan melengkapi adimistrasi pada fitur pembayaran di Admisitrasi.');
                    location.href = '../../administrasi/pembayaran.php';
                    </script>";
            } else {
                echo "<script>
                    alert('Tidak berhasil mendaftar pada lomba, silahkan coba lagi.');
                    location.href = '../../index.php';
                    </script>";
            }
        }

    }
} else {
    echo "<script>
        alert('Tidak berhasil mendaftar pada lomba, pastikan form anda terisi!');
        location.href = '../index.php';
        </script>";
}
?>