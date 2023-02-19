<?php 
$arr=[100,"ee",true];
echo $arr[0];
echo "<br>";
$angka=[
		[1,2,3],[4,5,6],[7,8,9]
		];
echo $angka[2][0]; //oke, lihat ini bermain logika, kembali ke index, jadi [2] itu adalah tempat kotak ke 3 (karna index dimulai dari o) dan [o] itu adalah isi index dari kotak yang 3 tadi
echo "<br>";
echo $angka[1][1]; //output 5
echo "<br>";
echo $angka[2][0]; //output 7
?>