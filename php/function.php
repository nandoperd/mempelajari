<?php //cek referensi di php.net/manual/en/funcref.php
	echo date("l, d-M-Y " );//u/ memanggil  sebuah function langsung aja, contohnya date
	//ref. l: hari d(day): tgl, M(month): bulan huruf, m: bulan angka, Y(year):tahun
	echo time(); //nah angka yang keluar itu adalah angka orang IT sejak 1 jan 1970
	//oke kita bermain, kita hitung hari apa 2 hari ke depan, sekarang minggu
	echo date("l", time()+60*60*24); //nah itu hitungan angka perdetik ya
	
	//mktime (membuat detik sendiri)
	//mktime(0,0,0,0,0,0)
	//ururtannya jam,menit, detik, bulan, tanggal, tahun
	echo mktime (0,0,0,9,12,1996);
	echo date ("l", mktime (5,0,0,9,12,1996));
	
	//strtotime (-string to time, nah ini lebih simple, kita tinggal memasukkan string)
	echo date ("l", strtotime ("9 des 1996"));
?>

<?php 
function salam($waktu= "datang", $nama="User") { //nah, ="datang" dan "user" adalah default yg kita gunakan jikalau di bawah tidak diisi, lihat h1. maka yg akan keluar adalah default 
	return "selamat $waktu, $nama!"; //return adalah untuk memanggil function di atas
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan function</title>
</head>
<body>
	<h1><?= salam("sore", "broker"); ?> </h1>
    <h1><?php echo date ("l"); ?> </h1>
    <h1><?= date("m"); ?> </h1>
</body>
</html>

 