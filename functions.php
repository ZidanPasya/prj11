<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prj";
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }

    function register($data){
        global $conn;

        $email = $data['email'];
        $name = $data['name'];
        $telpon = $data['telpon'];
        $password = mysqli_real_escape_string($conn, $data['password']);
        $confirmpassword = mysqli_real_escape_string($conn, $data['confpass']);

        if($password !== $confirmpassword){
            echo "<script>
                    alert('Password tidak sesuai');
                  </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO peserta(id_peserta, email, nama, notelp, password) 
                    VALUES (NULL, '$email', '$name', '$telpon', '$password')");
    }
?>