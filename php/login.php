<?php
    //memulai session
    session_start();

    //membuat session jika sudah login (agar yang sudah masuk tidak bisa ke halaman login)
    if (isset($_SESSION["login"])) {
        header("Location: looping2.php");
        exit;
    }

    require "koneksi.php";
    //cek submit
    if (isset($_POST["login"])) {
        
        //ambil data dari form login
        $username = $_POST["username"];
        $password = $_POST["password"];

        //cek data username pada database
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //cek username
        // num row adalah data yg dikembalikan dari database, jika ada (1) maka
        if ( mysqli_num_rows($result) === 1 ) {
            
            // cek password
            $row = mysqli_fetch_assoc($result);

            // menggunakan password verify (kebalikan hash) untuk verifikasi password
            // (!) usahakan buat panjang password di angka 255 untuk menghindari error pada password
            if ( password_verify($password, $row["password"])) {
            
                //set session
                $_SESSION["login"] = true;

                header("Location: looping2.php");
                // exit adalah untuk mematikan code setelahnya
                exit;
            }
        }

        // membuat kodisi error
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label {
            display: block;
        }

        h5 {
            color: red;
            background-color: yellow;
            width: fit-content;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <!-- pesan error -->
    <?php if(isset($error)) : ?>
        <h5>Username/Password tidak sesuai!</h5>
    <?php endif; ?>
    
    <form action="" method="POST">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit" name="login">Login</button>
    </form>

</body>
</html>