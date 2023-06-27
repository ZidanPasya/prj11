<?php
require '../../functions.php';
if (!$_SESSION["login"]) {
    header("location:../../form/signIn.php");
}
$id = $_POST["id"];
$nama = $_POST["name"];

$ukuranFile = $_FILES['gambar']['size'];
if ($ukuranFile > 1000000) {
    echo "<script> alert('Ukuran gambar terlalu besar'); </script>
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
				</script>
			";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tempname, "../bukti_pembayaran/" . $namaFileBaru);
    update_pembayaran($namaFileBaru, $id);
    header("Location: ../pembayaran");
}
?>