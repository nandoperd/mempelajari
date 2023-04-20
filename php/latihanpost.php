<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan post</title>
    <style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>
</head>
<body>
    <h1 class="judul">Latihan POST</h1>
    <form action="isilatihanpost.php" method="post">
    <label for="NAMA">NAMA</label>
    <input type="text" name="nama"/><br>
    <label for="NOMOR" name="nomor">NOMOR</label>
    <input type="number" name="nomor">
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>