<?php
    //pada looping sebelumnya kita hanya menggunakan fungsi koneksi dan masih memanggil
    // query pada halaman looping, sekarang kita akan pakai fungsi koneksi dan query

    //memulai session
    session_start();

    //cek session dari halaman login
    if (!$_SESSION["login"]) {
        header("Location: login.php");
        exit;
    }


    // koneksi database
    require "koneksi.php";

    // menampung data menggunakan fungsi query
    // perintah ORDER bisa menggunakan 2 macam yaitu ASC (dari kecil ke besar) dan DESC (dari besar ke kecil)
    // bisa juga memakai perintah WHERE untuk memanggil data spesifik
    $player = query("SELECT * FROM bola");

    //membuat variabel untuk memanggil fungsi cari data
    if (isset($_POST["cari"])) {
        $player = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping2</title>
    <style>
        .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
        }

        .button {
            color: seashell;
            border: 1px solid;
            margin: 5px;
            padding: 5px;
            text-decoration: none;
            background-color: mediumseagreen;
        }
        img {
            width: 50%;
        }
        .logout {
            float: right;
            border: 1px solid mediumaquamarine;
            background-color: tomato;
            border-radius: 10px;
            color: seashell;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1 class="judul">LOOPING 2</h1>
    <a class="logout" href="logout.php">Logout</a>
    <h2>Daftar Pemain</h2>
    <a class="button" href="tambah.php">Tambah Player</a><br><br>

    <!-- form search -->
    <form action="" method="POST">
        <!-- autocomplete untuk menghapus histori pencarian -->
        <input type="text" name="keyword" placeholder="cari data" autocomplete="off">
        <button type="submit" name="cari">CARI</button><br><br>
    </form>
    <table border="1px solid">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>POSISI</th>
            <th>GAMBAR</th>
            <th>AKSI</th>
        </tr>

        <!-- memanggil data menggunakan foreach (pengulangan untuk array (player)) -->
        <?php $no=1; ?>
        <?php foreach($player as $p) : ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p["nama"]; ?></td>
            <td><?= $p["club"]; ?></td>
            <td><?= $p["posisi"]; ?></td>
            <td><img src="img/<?= $p["gambar"]; ?>" alt="gambar"></td>
            <td>
                <a href="ubah.php?id=<?= $p["id"]; ?>">Edit</a> ||
            <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm ('apakah anda yakin menghapus data <?= $p["nama"]; ?> ?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>