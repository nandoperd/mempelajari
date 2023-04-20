<?php
    require "koneksi.php";
    //membuat cek kirim register
    if (isset($_POST["register"])) {
        //melakukan pengecekan pada fungsi registrasi
        if (registrasi($_POST) > 0) {
            echo "<script>
            alert('Registrasi berhasil!');
            </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Registrasi</h1>
    <!-- mencoba action pakai special char dan global server -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password2">Konfirmasi Password : </label>
        <input type="password" name="password2" id="password">
        <br><br>
        <button type="submit" name="register">Sign up!</button>
    </form>
    
</body>
</html>