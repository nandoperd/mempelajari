<?php 
//mencoba array di dalam array
$player=[ //ini ditulis jadi pembuka karena array yang mau kita masukan banyak
["Ronaldinho","Barca","SS","Brazil"],
["Ronaldinho","Barca","SS","Brazil"],
["Ronaldinho","Barca","SS","Brazil"],
];
?>

<html>
<head>
	<title>pengulangan array 2</title>
</head>
<body>
<h1> Data Ronaldinho</h1>
<?php foreach($player as $p) : ?>
<ul>
	<li> Nama : <?= $p[0]; ?> </li>
    <li> Club  : <?= $p[1]; ?> </li>
    <li> Posisi : <?= $p[2]; ?> </li>
    <li> Negara : <?= $p[3]; ?> </li>
</ul>
<?php endforeach; ?>
</body>
</html>