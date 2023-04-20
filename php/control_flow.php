<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">PERULANGAN</h1>
<h1></h1>

<p class="judul">for</p>
<?php 
//pengulangan
//for, while, do.. while, foreach (khusus array)

for($i=0; $i < 10; $i++) {
	echo "broker <br>"; //inisialisi (variabel awal pengulangan), kondisi terminasi (memberhentikan pengulangan), 
	// incerment/dekermnent (supaya pengulangannya maju atau mundur) nah i variabel dalam for artinya index
	//yang keluar adalah 10x broker karena index dimulai dari 0
}
?>

<p class="judul">while</p>
<?php  
//kalo while penulisannya gini
$i=0; //deklarasikan terlebih dahulu variabel i (index)
while ($i<10) {
	echo "nandonando! <br>";
$i++;
}
?>

<p class="judul">do while</p>
<?php  
$i=1;
do {
	echo "nandoperd yo <br>"; //nah beda do while dengan while adalah do while minimal dikerjakan sekali karna dia do dulu, kalo while langsung perintah
$i++;
} while($i < 5);
	
?>

<p class="judul">for, if, endfor</p>
<!DOCTYPE html>
<html>
<head>
<style>
	.warna {
		background-color:silver;
	}
</style>
</head>

<body>
<table border="1" cellpadding="10" cellspacing="0" >
	<?php for($i=1; $i<=5; $i++) : ?>    
        <?php if($i % 2 == 1) :?>
        	<tr class="warna">
        <?php  else : ?> 
			<tr>
        <?php  endif; ?>
		<?php for($j=1; $j<=5; $j++) : ?> <!-- nah itu : sebenarnya { bukaan-->
        	<td><?= "$i,$j"; ?></td> <!--- < ? = itu artinya php echo-->
		<?php endfor; ?> <!-- nah itu endfor adalah penutup dari bukaan di atas-->
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>

<p class="judul">if else</p>
<?php  
//pengkondisian/percabangan
//if else, if else, if elses if else, ternary, switch

$x=30;
if ( $x<20) {
	echo"yoi";
} else if ($x==20) {
	echo"NAH";
} else {
	echo"NO!";
}
?>

<p class="judul">foreach</p>
<?php
	// foreach adalah perintah untuk perulangan array
	$op = array("Luffy","Zoro","Sanji","Usopp","Franky");

	foreach ($op as $o){
		echo "$o <br>";
	}
	echo "<br>";

	//contoh lain
	$rom = array("X" => "10", "L" => "50", "C" => "100");

	foreach ($rom as $r => $val){
		echo "$r = $val <br>";
	}
?>

<p class="judul">break & continue</p>
<?php
	//break berfungsi untuk mematikan looping pada code setelahnya
	//continue adalah kebalikannya untuk melanjutkan eksekusi code setelahnya
	//matikan dan nyalakan salah satu untuk mengetes fungsinya 
	for($x=0; $x<10; $x++){
		if ($x == 4) {
			// break;
			continue;
		}
		echo $x;
	}
	//maka outputnya adalah 01234, karena pada x 4 dilakukan break
	echo "<br>";
	//contoh break pada do while
	$y = 0;

	while($y < 10){
		if ($y == 4) {
			// $y++; //continue
			// continue;
			break;
		}
		echo "$y";
		$y++;
	}
?>

<p class="judul">latihan</p>
<?php
	for ($b=1; $b<=5; $b++){
		echo $b;
	}
?>

<?php
	for($i=0;$i<10;$i++){
		echo "<h1>BROKER</h1>";
	}
?>
<br>
<?php
	$i=0;
	while ($i<=5){
		echo "kingkong <br>";
		$i++;
	}
?>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		#war {
			background-color: tomato;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
	<?php for($i=0; $i<=5; $i++) : ?>
		<?php if ($i % 2 == 1) : ?>
			<tr id="war">
		<?php else : ?>
			<tr>
		<?php endif; ?>
		<?php for($a=0; $a<=5; $a++) : ?>
		<td><?= "$i,$a";?></td>
		<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>
</body>
</html>
<br>
<html>
    <head>
        <style>
            .ijo {
                background-color: green;
            }
            .red {
                background-color: red;
            }
        </style>
    </head>
    <body>
    <table border="1" cellpadding="10" cellspacing="0" >
        <?php for ($i=1; $i<=5; $i++) : ?>
        <?php if($i % 2 == 1) :?>
            <tr class="ijo">
        <?php else : ?>
        <tr class="red">
        <?php endif; ?>
            <?php for($j=1; $j<3; $j++):?>
            <td><?="$i, $j"?></td>
            <?php endfor;?>
        </tr>
        <?php endfor ; ?>
    </table> 
    </body>
</html>