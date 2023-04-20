<?php
    if (!isset($GET["name"]) || !isset($GET["club"])) {
        header("Location:latihanget.php");
        exit;
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail Player</title>
</head>

<body>
<ul>
	<li>
    <img src="img/<?=$_GET["gambar"];?>">
    </li>
    <li> <?=$_GET["name"];?> </li>
    <li> <?=$_GET["club"];?></li>
</ul>

<a href="latihanget.php">kembali</a>

</body>
</html>
