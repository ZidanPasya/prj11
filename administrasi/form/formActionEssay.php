<?php
require '../../functions.php';
if (!$_SESSION["login"]) {
    header("location:../../form/signIn.php");
}
$id = $_POST["id"];
$nama = $_POST["name"];

$ukuranFile = $_FILES['gambar']['size'];
$ukuranFile2 = $_FILES['twibbon']['size'];
if ($ukuranFile > 1000000 || $ukuranFile2 > 1000000) {
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

    $filename2 = $_FILES["twibbon"]["name"];
    $tempname2 = $_FILES["twibbon"]["tmp_name"];

    $ekstensiGambarValid2 = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar2 = explode('.', $filename2);
    $ekstensiGambar2 = strtolower(end($ekstensiGambar2));
    if (!in_array($ekstensiGambar2, $ekstensiGambarValid2)) {
        echo "
				<script>
					alert('Yang anda upload bukan gambar');
				</script>
			";
        return false;
    }
    $namaFileBaru2 = uniqid();
    $namaFileBaru2 .= '.';
    $namaFileBaru2 .= $ekstensiGambar2;

    move_uploaded_file($tempname, "../bukti_pembayaran/" . $namaFileBaru);
    update_pembayaran($namaFileBaru, $id);

    move_uploaded_file($tempname2, "../twibbon/" . $namaFileBaru2);
    update_twibbon($namaFileBaru2, $id);

    header("Location: ../pembayaran");
}
?>