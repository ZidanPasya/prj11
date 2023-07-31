<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "prj";
$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
if (!isset($_SESSION)) {
    session_start();
}



function register($data)
{
    global $conn;

    $email = $data['email'];
    $name = $data['name'];
    $telpon = $data['telpon'];
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $data['confpass']);

    if ($password !== $confirmpassword) {
        echo "<script>
                    alert('Password tidak sesuai');
                  </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO peserta(id, email, nama, telpon, password) 
                    VALUES (NULL, '$email', '$name', '$telpon', '$password')");
}


function update_identitas($gambar, $nama)
{
    global $conn;
    return mysqli_query($conn, "UPDATE anggota SET bukti_identitas = '$gambar' Where nama = '$nama'");
}

function insert_pendaftaran($nama, $instansi, $mail, $div, $id_pendaftaran)
{
    global $conn;
    $q = "INSERT INTO `pendaftaran`(`divisi`, `sekolah`, `email`, `nama_tim`,`date` ,`id_peserta`) VALUES ('$div','$instansi','$mail','$nama',current_date(),'$id_pendaftaran')";
    mysqli_query($conn, $q);
    return mysqli_insert_id($conn);
}


function insert_anggota($nama, $mail, $telpon, $birth, $id_pendaftaran, $instansi)
{
    global $conn;
    return mysqli_query($conn, "INSERT INTO `anggota`(`nama`, `email`,`birth`, `no_hp`, `id_pendaftaran`,`instansi`) VALUES ('$nama','$mail','$birth','$telpon','$id_pendaftaran','$instansi')");
}

function update_pembayaran($gambar, $id)
{
    global $conn;
    return mysqli_query($conn, "UPDATE pendaftaran SET buktiPembayaran = '$gambar' Where id = '$id'");
}

function update_karya($gambar, $id)
{
    global $conn;
    return mysqli_query($conn, "UPDATE pendaftaran SET karya = '$gambar' Where id = '$id'");

}

function update_twibbon($gambar, $id)
{
    global $conn;
    return mysqli_query($conn, "UPDATE pendaftaran SET twibbon = '$gambar' Where id = '$id'");
}
?>