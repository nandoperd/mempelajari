<?php 
//array
//variabel yang dapat memiliki banyak nilai
//cara lama
//elemen dalam array boleh memilki tipe data berbeda: huruf, angka, boolean dll.
//pasangan antara key dan value
//key nya adalah index yg dimulai dari 0, bisa dilihat di view page source
$hari=array("Senin", "Selasa", "rebo", "kemis");
//cara baru
$bulan=["januari", "februari", "maret"]; //langsung tanpa nulis array lagi  

//menampilkan array
//var_dump() / print_r()
var_dump($bulan);
print_r($hari);

//menampilkan 1 element
echo $hari[0]; //nah ingat index dimulai dari 0
echo"<br>";
echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($bulan);
$bulan[]="april";
$bulan[]="mei";
echo"<br>";
var_dump($bulan); //nah ntar dia bakalan nambah
?>

