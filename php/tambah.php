<?php
    //memulai session
    session_start();
    
    //cek session dari halaman login
    if (!$_SESSION["login"]) {
        header("Location: login.php");
        exit;
    }
    
    // koneksi
    require "koneksi.php";

    //cek submit sudah diklik atau belum
    if (isset($_POST["submit"])){

        // die perintah untuk mematikan code seterusnya
        // var_dump($_POST);
        // var_dump($_FILES); die;
        
        //menyimpan data dari tiap elemen dalam form ke dalam variabel
        //data di bawah disederhanakan dalam fungsi koneksi.php
        // $nama = $_POST["nama"];
        // $club = $_POST["club"];
        // $posisi = $_POST["posisi"];

        //query insert data
        //membuat variabel untuk insert data
        //data di bawah disederhanakan dalam fungsi koneksi.php

        // $tambah = "INSERT INTO bola VALUES ('','$nama','$club','$posisi')";

        // mysqli_query($conn, $tambah);

        //cek data terkirim atau tidak
        //cek berapa row data yang berhasil dikirim
        // var_dump(mysqli_affected_rows($conn));
        // code sebelum disederhanakan pada fungsi koneksi.php
        // if (mysqli_affected_rows($conn)>0) {
        //     echo "berhasil";
        // } else {
        //     echo "gagal";
        //     echo "<br>";
        //     echo mysqli_error($conn);
        // }

        //cek data terkirim yang dikirim ke fungsi koneksi.php
        if ( tambah($_POST)>0) {
            // echo "data berhasil ditambahkan!";
            //membuat notif berhasil menggunakan java script
            echo "<
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'looping2.php';
                </script>
            ";
        } else {
            //echo "data gagal ditambahkan";
            //membuat notif berhasil menggunakan java script
            echo "<
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'looping2.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Player</title>
</head>
<body>
    <h1>Tambah Player</h1>

    <!-- form jika kosong maka akan kembali ke halaman ini sendiri -->
    <!-- enctype berfungsi unntuk membuat 2 jalur post yaitu $_POST dan $_FILES -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama  :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
                <label for="club">Club  &nbsp;&nbsp;:</label>
                <input type="text" name="club" id="club" required>
            </li>
            <br>
            <li>
                <label for="posisi">Posisi  :</label>
                <input type="text" name="posisi" id="posisi" required>
            </li><br>
            <li>
                <label for="gambar">Gambar  :</label>
                <input type="file" name="gambar" id="gambar">
            </li><br>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
            <br>
        </ul>
    </form>
    
</body>
</html>