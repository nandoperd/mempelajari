<?php 
//ini komentar
/*
ini komentar
komentar banyak
*/
//standard output : echo, print, print_r, var_dump (untuk memberi info berapa karakter)
echo "nandoperd";
echo 'nandoperd';
echo "jum'at" ;//nah tanda petik itu kondisional, tergantung komanya, tapi petik 2 lebih disarankan untuk iterpolasi
echo 12345;//kalo angka ga perlu tanda petik
var_dump ("nandoperd");//nah kalo var_dump harus pake tanda kurung
?>

//contoh PHP di dalam HTML
<html>
	<title> nanndoperd thing </title>
		<body>
			<h1> halo <?php echo "nandoperd";?> </h1> <!--nah nandoperd nya php--> 
		</body>
</html>

<?php 
//variabel & tipe data
//variabel (penting! variabel tidak boleh mengandung angka DI DEPANNYA! ntar bisa error
$nama="labuda";
?>		
<html>
	<title> nanndoperd thing </title>
		<body>
			<h1> halo <?php echo $nama;?> </h1> <!--nah ini sudah ngambil data dari php yang di atas--> 
		</body>
</html>

<?php 
//operator
//aritmatika : + - * /
//contoh
$x=10;
$y=2;
echo $x+$y;
echo $x-$y;
echo $x*$y;
echo $x/$y;

//penggabung string/concatenation
//. (titik)
//contoh
$nama_depan="van";
$nama_belakang="basten";
echo $nama_depan.$nama_belakang;

//assigment (penugasan)
// =, +=(variabel sebelumnya ditambah variabel sekarang), -=(variabel sebelumnya dikurang variabel sekarang), *=, /=, %=, .=
//cotoh
$a=2;
$a+=3;
echo $a;

$b=100;
$b/=50;
echo $b;

$nama="nandoperd";
$nama.=" ";
$nama.="is cool";
echo $nama;

//perbandingan
// < > <= >= == !=
//contoh
var_dump(3<6);//nanti dia akan menampilkan boolean apakah true or false
var_dump(3==6);

//identitas
// ===  !===
//contoh
var_dump(3 === 3); //nah dia akan ngecek tipe data benar atau salah

//logika
// &&((and)2 2 nya harus benar) ||((or)cukup satu aja yg betul maka akan true) !
//contoh
$x=10;
var_dump($x < 20 && $x % 2 == 0); //cat. % itu adalah sisa kalo kita bagi, apakah 1 atau 0


?>

