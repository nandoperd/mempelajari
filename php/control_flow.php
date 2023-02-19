<?php 
//pengulangan
//for, while, do.. while, foreach (khusus array)

for( $i=0; $i < 10; $i++) {
	echo "broker <br>"; //inisialisi (variabel awal pengulangan), kondisi terminasi (memberhentikan pengulangan), incerment/dekermnent (supaya pengulangannya maju atau mundur) nah i variabel dalam for artinya index
	//yang keluar adalah 10x broker karena index dimulai dari 0
}
?>

<?php  
//kalo while penulisannya gini
$i=0; //deklarasikan terlebih dahulu variabel i (index)
while ($i<10) {
	echo "nandonando! <br>";
$i++;
}
?>

<?php  
$i=1;
do {
	echo "nandoperd yo <br>"; //nah beda do while dengan while adalah do while minimal dikerjakan sekali karna dia do dulu, kalo while langsung perintah
$i++;
} while($i < 5);
	
?>

//ni agak rumit
<!DOCTYPE html>
<html>
<head>
<style> <!--yak kita main css-->
	.warna-baris {
		background-color:silver;
	}
</style>
</head>

<body>
<table border="1" cellpadding="10" cellspacing="0" >
	<?php for($i=1; $i<=5; $i++) : ?>    
        	<?php if($i % 2 == 1) :?>
            	<tr class="warna-baris">
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
