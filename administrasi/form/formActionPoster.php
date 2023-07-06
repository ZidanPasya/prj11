<?php
require '../../functions.php';
if (!$_SESSION["login"]) {
    header("location:../../form/signIn.php");
}
$id = $_POST["id"];
if ($id == null) {
    header("Location: ../pembayaran.php");
}
$nama = $_POST["name"];

if ($_FILES['karya'] !== null) {
    $ukuranFile2 = $_FILES['karya']['size'];
    if ($ukuranFile2 > 10000000) {
        echo "<script> alert('Ukuran gambar terlalu besar');
                    location.href = 'formActionPG.php';        
            </script>
                ";
        return false;
    } else {
        $filename2 = $_FILES["karya"]["name"];
        $tempname2 = $_FILES["karya"]["tmp_name"];

        $ekstensiGambarValid2 = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar2 = explode('.', $filename2);
        $ekstensiGambar2 = strtolower(end($ekstensiGambar2));
        if (!in_array($ekstensiGambar2, $ekstensiGambarValid2)) {
            echo "
                    <script>
                        alert('Yang anda upload bukan gambar');
                        location.href = 'formActionPG.php';
                    </script>
                ";
            return false;
        }
        $namaFileBaru2 = uniqid();
        $namaFileBaru2 .= '.';
        $namaFileBaru2 .= $ekstensiGambar2;

        move_uploaded_file($tempname2, "../karya/" . $namaFileBaru2);
        update_karya($namaFileBaru2, $id);
    }
}
// $ukuranFile = $_FILES['gambar']['size'];
// if ($ukuranFile > 1000000) {
//     echo "<script> alert('Ukuran gambar terlalu besar'); </script>
// 		";
//     return false;
// } else {
//     $filename = $_FILES["gambar"]["name"];
//     $tempname = $_FILES["gambar"]["tmp_name"];

//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $filename);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "
// 			<script>
// 				alert('Yang anda upload bukan gambar');
// 			</script>
// 		";
//         return false;
//     }
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     if ("karya" !== null) {
//         $ukuranFile2 = $_FILES['karya']['size'];
//         if ($ukuranFile2 > 1000000) {
//             echo "<script> alert('Ukuran gambar terlalu besar'); </script>
//                 ";
//             return false;
//         } else {
//             $filename2 = $_FILES["karya"]["name"];
//             $tempname2 = $_FILES["karya"]["tmp_name"];

//             $ekstensiGambarValid2 = ['jpg', 'jpeg', 'png'];
//             $ekstensiGambar2 = explode('.', $filename2);
//             $ekstensiGambar2 = strtolower(end($ekstensiGambar2));
//             if (!in_array($ekstensiGambar2, $ekstensiGambarValid2)) {
//                 echo "
//                     <script>
//                         alert('Yang anda upload bukan gambar');
//                     </script>
//                 ";
//                 return false;
//             }
//             $namaFileBaru2 = uniqid();
//             $namaFileBaru2 .= '.';
//             $namaFileBaru2 .= $ekstensiGambar2;

//             update_karya($namaFileBaru2, $id);
//             move_uploaded_file($tempname2, "../karya/" . $namaFileBaru2);
//         }
//     }

//     update_pembayaran($namaFileBaru, $id);
//     move_uploaded_file($tempname, "../bukti_pembayaran/" . $namaFileBaru);
// }

// Now let's move the uploaded image into 
// if ($filename == null) {
//     $folder = null;
// } else {
//     $folder = "../../img/" . $filename;
//     update_pembayaran($folder, $id);
// }

// move_uploaded_file($tempname, $folder);
header("Location: ../pembayaran");
?>