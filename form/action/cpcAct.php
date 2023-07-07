<?php
require '../../functions.php';
if (!empty($_POST["username"]) && !empty($_POST["name"]) && !empty($_POST["telp"]) && !empty($_POST["school"]) && !empty($_POST["birth"]) && !empty($_FILES["gambar"]["name"])) {
    $mail = $_POST["username"];
    $nama = $_POST["name"];
    $telpon = $_POST["telp"];
    $instansi = $_POST["school"];
    $birth = $_POST["birth"];
    $id = $_SESSION["id"];

    $ukuranFile = $_FILES['gambar']['size'];
    if ($ukuranFile > 1000000) {
        echo "<script> 
        alert('Ukuran gambar terlalu besar'); 
        location.href = '../cpcAct.php';
        </script>
			";
        return false;
    } else {
        $filename = $_FILES["gambar"]["name"];
        $tempname = $_FILES["gambar"]["tmp_name"];

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $filename);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
				<script>
					alert('Yang anda upload bukan gambar');
                    location.href = '../cpcAct.php';
				</script>
			";
            return false;
        }
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tempname, "../../img/" . $namaFileBaru);

        $id_pendaftaran = insert_pendaftaran($nama, $instansi, $mail, 'CPC', $id);
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
} else {
    echo "<script>
                alert('Tidak berhasil mendaftar pada lomba, pastikan form anda terisi!');
                location.href = '../../index.php';
                </script>";
}


?>