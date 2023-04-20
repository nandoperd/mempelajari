<?php
    require "koneksi.php";

    //membuat query di halaman ini sendiri tanpa fungsi query pada koneksi.php
    // $result = mysqli_query($conn, "SELECT * FROM bola");

    // $player = mysqli_fetch_assoc($result);

    //tinggal mengisi koneksi dan query pada koneksi.php
    $player = query("SELECT * FROM bola");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        th, td {
            border: 2px solid saddlebrown;
            padding: 5px;
            margin: 2px;
        }
        .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
    </style>
</head>
<body>

    <h1>Daftar Pemain</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Posisi</th>
        </tr>

    <?php 
    $no=1;
    foreach($player as $p):
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p["nama"] ?></td>
            <td><?= $p["club"] ?></td>
            <td><?= $p["posisi"] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    
</body>
</html>