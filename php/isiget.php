<?php 
//untulk sistem keamanan, untuk cek apakah tidak ada data di $_GET
if( !isset($_GET["name"]) ) { //artinya adalah jika GET pada array nama belum pernah (!) diset/dibuat (isset) maka diarahkan ke header location di bawah
	//redirect, kita tendang si user yg usil
	header("Location: get.php"); //itu lokasi penendangannya
	exit; //agar user usil ketendang
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GET</title>
</head>

<body>

<ul>
	<li><img src="img/<?=$_GET["gambar"];?>" alt=""></li>
    <li><?=$_GET["name"];?></li>
    <li><?=$_GET["club"];?></li>
</ul>
<a href="get.php">kembali</a>
</body>
</html>
