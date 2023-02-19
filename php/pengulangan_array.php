<?php 
//pengulangan pada array
//for. foreach
//contoh
$angka = [90,35,3,17,904,40317,72,86,98700,32,34,39,2,5];
?>
<!DOCTYPE html>
<html>
<head> 
	<title> pengulangan array</title>
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

<!-- metode 1 : melakukan pengulangan dengan for -->
<?php for($i=0; $i < count($angka); $i++){ ?> <!--count berfungsi untuk melakukan pengulangan dengan array $angka di atas-->
	<div class="kotak"><?php echo $angka[$i]; ?> 
	</div>
<?php } ?>
	
<div class="clear"> </div> <!--buat ngebersihin div sebelumnya-->

<!-- metode 2 : melakukan pengulangan dengan pharsing (tanpa ditutup dengan foreach) -->
<?php foreach($angka as $a) { ?> 
	<div class="kotak"><?php echo $a?></div>
<?php }?>

<div class="clear"> </div> 

<!-- metode 3 : pengulangan dengan foreach dan ditutup dengan endforeach -->
<?php foreach ($angka as $a) : ?> <!--nah disini perbedaannya dengan yg sebelumnya dia dibuka dengan titik 2 -->
	<div class="kotak"><?= $a;?></div>
<?php endforeach; ?> <!--nah kalo yg diawali : maka diakhiri end-->

</body>
</html>