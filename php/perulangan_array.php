<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">PERULANGAN ARRAY</h1>
<?php 
//pengulangan pada array
//for. foreach
//contoh
$angka = [90,35,3,17,904,40317,72,86,98700,32,34,39,2,5];
?>
<!DOCTYPE html>
<html>
<head> 
	<title> perulangan array</title>
<style>
		.kotak { 
			width:50px;
			height:50px;
			background-color:#0099CC;
			text-align:center;
			line-height:50px;
			margin:3px;
			float:left;
		}
		.clear {clear:both;} /*clear float biar ga nerus ke kanan*/
</style>
</head>
<body>

<h2 class="judul">Metode-metode perulangan array</h2>

<p class="judul">for</p>
<!-- metode 1 : melakukan pengulangan dengan for -->
<?php for($i=0; $i < count($angka); $i++){ ?> <!--count berfungsi untuk melakukan pengulangan dengan array $angka di atas-->
	<div class="kotak"><?php echo $angka[$i]; ?> 
	</div>
<?php } ?>
	
<div class="clear"> </div> <!--buat ngebersihin div sebelumnya-->

<p class="judul">pharsing</p>
<!-- metode 2 : melakukan pengulangan dengan pharsing (tanpa ditutup dengan foreach) -->
<?php foreach($angka as $a) { ?> 
	<div class="kotak"><?php echo $a?></div>
<?php }?>

<div class="clear"> </div> 

<p class="judul">endforeach</p>
<!-- metode 3 : pengulangan dengan foreach dan ditutup dengan endforeach -->
<?php foreach ($angka as $a) : ?> <!--nah disini perbedaannya dengan yg sebelumnya dia dibuka dengan titik 2 -->
	<div class="kotak"><?= $a;?></div>
<?php endforeach; ?> <!--nah kalo yg diawali : maka diakhiri end-->

</body>
</html>
<br><br><br>

<p class="judul">perulangan data array</p>

<?php 
//mencoba array di dalam array
$player=[ //ini ditulis jadi pembuka karena array yang mau kita masukan banyak
["Ronaldinho","Barca","SS","Brazil"],
["Ronaldo","Madrid","CF","Brazil"],
["Cafu","Milan","RB","Brazil"],
];
?>

<html>
<head>
	<title>pengulangan array 2</title>
</head>
<body>
<h1> Braziliano</h1>
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
<br>

<p class="judul">latihan</p>
<h1><img style="width: 2%;" src="img/milan.png" alt=""> Milan </h1>
<html>
    <head>
        <style>
            label {
                border : 1px solid red; 
                padding : 3px;
            }
            li {
                list-style-type: square;
                padding : 1px;
                margin-top : 2px;
            }
        </style>
    </head>
<?php
$player = [
    [
        "name" => "Maldini",
        "position" => "LB",
        "nationality" => "Italy"  
    ],
    [
        "name" => "Seedorf",
        "position" => "CMF",
        "nationality" => "Netherland"    
    ],
    [
        "name" => "Inzaghi",
        "position" => "CF",
        "nationality" => "Italy"   
    ]
    ];
?>

<?php foreach ($player as $p): ?>
    <ul>
        <label for="player">PLAYERS</label>
        <li>Name : <?= $p["name"];?></li>
        <li>Position : <?= $p["position"];?></li>
        <li>Nationality : <?= $p["nationality"];?></li>
    </ul>
<?php endforeach; ?>
</html>