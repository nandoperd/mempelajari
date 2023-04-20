<?php
    if (!isset($POST["nama"])|| !isset($POST["nama"])) {
        header("Location:latihanpost.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
        border: 1px solid tomato;
        padding: 5px;
        border-radius: 10px;
    }
    </style>
</head>
<body>
    <h1 class="kotak">NAMA :<?=$_POST["nama"];?></h1>
    <h1 class="kotak">NOMOR :<?=$_POST["nomor"];?></h1>
    
</body>
</html>