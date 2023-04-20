<?php
    //memanggil fungsi koneksi
    require 'koneksi.php';

    //membuat looping dengan while
    // while ($bola = mysqli_fetch_assoc($result)) {
    //     var_dump($bola);
    // }
?>

<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">LOOPING</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>

<table border="1px solid">
    <tr>    
    <th>NO</th>
    <th>NAMA</th>
    <th>CLUB</th>
    <th>POSISI</th>
    </tr>

    <?php
        //memanggil query
        $result = mysqli_query($conn, "SELECT * FROM bola");
        //memasukkan fetch ke dalam array
        $bola = mysqli_fetch_assoc($result);

        //membuat nilai awal nomor
        $no=1;
        //membuat looping dengan while
        while($bola = mysqli_fetch_assoc($result)) : ?>
    <tr>
    <td><?=$no++ ?></td>
    <td><?= $bola["nama"]; ?></td>
    <td><?= $bola["club"]; ?></td>
    <td><?= $bola["posisi"]; ?></td>
    </tr>
    <?php
        //menutup while
        endwhile; 
    ?>
</table>
    
    
</body>
</html>