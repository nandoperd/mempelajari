<?php
	//bagian cookie yang dipindahkan ke atas
	// syntax membaut cookie : setcookie(name, value, expire, path, domain, secure, httponly);
	// yg harus name saja, sisanya opsional
	// contoh membuat cookie yang akan hilang setelah 1 hari
	$cookie_name = "user";
	$cookie_value = "Broker";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = total detik 1 hari

	//menghapus cookie dalam satu jam kedepan
	setcookie("user", "", time() - 3600);


?>

<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">FUNCTION</h1>

<?php
	echo "fungsi tanggal : ";
	function tanggal(){
		echo date("l, D-M-Y");
	}
	tanggal();
?>
<br>

<?php
	echo "<ins>fungsi string</ins><br>";
	function baca($ibukota, $negara){
		echo "$ibukota adalah ibu kota $negara.<br>";
	}
	baca("Jakarta", "Indonesia");
	baca("Riyadh", "Arab Saudi");

	echo "fungsi tambah : ";
	function tambah($x, $y){
		return $x + $y;
	}
		echo tambah(2,4);
?>

<h2 class="judul">Date & Time</h2>
	<?php //cek referensi di php.net/manual/en/funcref.php
		echo date("l, d-M-Y " );//u/ memanggil  sebuah function langsung aja, contohnya date
		//- l: (lowercase) hari dalam seminggu
		//  - d(day): tgl angka
		//  - M(month): bulan 3 huruf
		//  - m: bulan angka
		//  - Y(year):tahun lengkap
		echo "<br>";

		echo "IT Time : ";
		echo time(); //nah angka yang keluar itu adalah angka orang IT sejak 1 jan 1970
		echo "<br>";
		//oke kita bermain, kita hitung hari apa 2 hari ke depan, sekarang minggu
		echo "2 hari besok adalah " . date("l", time()+60*60*24); //nah itu hitungan angka perdetik ya
		echo "<br>";

		//mktime (membuat detik sendiri)
		//mktime(0,0,0,0,0,0)
		//ururtannya (jam,menit, detik, bulan, tanggal, tahun)
		$d = mktime (0,0,0,22,02,2022);
		echo "Tanggal cantik dengan mktime " . date("Y-m-d h:i:sa", $d);
		echo "<br>";
		
		//strtotime (-string to time, nah ini lebih simple, kita tinggal memasukkan string)
		echo date ("l", strtotime ("December 09 1996"));
		echo "<br>";

		//w3s
		//waktu berdasarkan server
		echo "Waktu sekarang : " . date("h:i:sa");
		// H : format jam 00-23 h : format jam 01-12
		// i : menit dari 00-59
		// s : detik dari 00-59
		// a : am/pm 
		echo "<br>";

		//mengatur zona waktu
		date_default_timezone_set("Asia/Jakarta");
		echo "Di Jakarta sekarang jam ". date("h:i:sa") . "<br>";

		//php mengerti perintah berikut ini
		//hari besok
		$f =strtotime("tomorrow");
		echo "besok hari " . date("l", $f) . "<br>";

		//tanggal minggu besok
		$f =strtotime("next Saturday");
		echo "Hari minggu besok tanggal " . date("Y-m-d", $f) . "<br>";

		//tanggal 3 bulan kedepan
		$f =strtotime("+3 Months");
		echo "tanggal 3 bulan kedepan : " . date("Y-m-d h:i:sa", $f) . "<br>";

		//perulangan tanggal
		$startdate=strtotime("Saturday");
		$enddate=strtotime("+6 weeks", $startdate);

		while ($startdate < $enddate) {
		echo date("M d", $startdate) . "<br>";
		$startdate = strtotime("+1 week", $startdate);
		}

		// menghitung hari
		$d1=strtotime("December 31");
		$d2=ceil(($d1-time())/60/60/24);
		echo "Akhir tahun " . $d2 ." hari lagi.";

		?>
	<p><a href="https://www.php.net/manual/en/timezones.php" target="_blank">lihat zona waktu pada php</a></p>
	<!-- membuat copyright tahun -->
	&copy; 2020-<?php echo date("Y");?>

	<h2 class="judul">Include & Require</h2>
	<p>Perbedaan antara include dan require adalah include akan tetap berjalan jika referensi halaman php
		tidak ada, sedangkan require tidak.
	</p>
	<h3 class="judul">include</h3>
	<?php
		// include "gaada.php";
		// echo "Saya punya $nama dan $baju";
		// echo "berakibat error namun code lainnya tetap berjalan";
	?>

	<h3 class="judul">require</h3>
	<?php
		// require "gaada.php";
		// echo "Saya punya $nama dan $baju";
		// echo "berakibat code setelahnya mati";
	?>

	<h2 class="judul">readfile</h2>
	<?php
		//Fungsi readfile() membaca file dan menulisnya ke buffer keluaran
		//mengarah pada file readfile.txt
		readfile("readfile.txt");
	?>

	<h2 class="judul">open/read</h2>
	<?php
		// fungsi fopen adalah untuk membuka file yang dituju, r artinya read
		$myfile = fopen("readfile.txt", "r") or die("Ga bisa buka file!");
		//fread untuk membaca file
		echo fread($myfile,filesize("readfile.txt"));
		//fclose untuk menutup
		fclose($myfile);
		//jika file yg dituju tidak ada akan error dan menampilkan pesan die
	?>
	<br>
	<a href="https://www.w3schools.com/php/php_file_open.asp">referensi</a>

	<h2 class="judul">create/write</h2>
	<?php
		// $myfile = fopen("broker.txt", "w") 
		//fungsi fopen juga adalah membuat file baru jika file yang ditulis belum ada
		//seperti contoh di atas sebelumnya saya tidak memiliki file broker.txt

		//menulis isi file menggunakan fcreate
		$myfile = fopen("broker.txt", "w") or die("Ga bisa buka file!");
		$txt = "Rafael Leao\n";
		fwrite($myfile, $txt); //parameter pertama adalah nama file dan kedua adalah string yang akan ditulis
		$txt = "Olivier Giroud\n";
		fwrite($myfile, $txt);
		fclose($myfile); //tutup file setalah ditulis
		//maka jika dilihat ke file broker.txt yg sebelumnya kosong sekarang sudah terisi 2 nama di atas
		readfile("broker.txt");
	?>

	<p class="judul">overwrite</p>
	<?php
		//file broker.txt yang sudah terisi nama di atas akan hilang dan tergantikan oleh yg baru
		$myfile = fopen("broker.txt", "w") or die("Ga bisa buka file!");
		$txt = "Fikayo Tomori\n";
		fwrite($myfile, $txt);
		$txt = "Simon Kjaer\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		readfile("broker.txt");
	?>

	<p class="judul">append</p>
	<?php
		//jika di atas melakukan overwrite dengan perintah yang sama "w", maka perintah "a" adalah untuk menambahkan (append)
		$myfile = fopen("broker.txt", "a") or die("Ga bisa buka file!");
		$txt = "Mike Maignan\n";
		fwrite($myfile, $txt);
		$txt = "Ismael Bennacer\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		readfile("broker.txt");
	?>

	<h2 class="judul">cookies</h2>
	<?php
		//setcookie ada di paling atas karna harus ditulis sebelum html
		if(!isset($_COOKIE[$cookie_name])) {
			echo "Cookie named '" . $cookie_name . "' is not set!";
		  } else {
			echo "Cookie '" . $cookie_name . "' is set!<br>";
			echo "Value is: " . $_COOKIE[$cookie_name];
		  }
		echo "<br>";

		//   cek apakah ada cookie atau tidak
		if (count($_COOKIE) > 0) {
			echo "ada cookie";
		} else {
			echo "gaada cookie";
		}
	?>

	<h2 class="judul">Filters</h2>
	
	<p class="judul">filter list</p>

	<table>
	<tr>
		<td>Filter Name</td>
		<td>Filter ID</td>
	</tr>
	<?php
	foreach (filter_list() as $id =>$filter) {
		echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
	}
	?>
	</table>

	<p class="judul">filter var</p>
	<?php
		//filter var seperti htmlspecialchars untuk memfilter karakter yang tidak diinginkan
		$kata = "<h1>SAYA HACKER!</h1>";
		$katabaru = filter_var($kata, FILTER_SANITIZE_STRING);
		echo $katabaru;
		echo "<br>";

		// filter int
		$int = 123; //valid
		// $int = halo; //invalid
		echo $int . " : ";
		if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
		echo("Integer is valid");
		} else {
		echo("Integer is not valid");
		}
		echo "<br>";

		//filter IP
		$ip = "127.0.0.1";

		if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
		echo("$ip is a valid IP address");
		} else {
		echo("$ip is not a valid IP address");
		}
		echo "<br>";

		//filter email
		$email = "broker@gmail.com";

		// Remove all illegal characters from email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		// Validate e-mail
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo("$email is a valid email address");
		} else {
		echo("$email is not a valid email address");
		}
		echo "<br>";

		// filter URL
		$url = "https://www.bedebah.com";

		// Remove all illegal characters from a url
		$url = filter_var($url, FILTER_SANITIZE_URL);

		// Validate url
		if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
		echo("$url is a valid URL");
		} else {
		echo("$url is not a valid URL");
		}
		echo "<br>";

		// membuang karakter dengan ASCII value > 127
		$kal = "<h1>Hello WorldÆØÅ!</h1>";

		$kalbar = filter_var($kal, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		echo $kalbar;
		?>

		<h2 class="judul">Fungsi Callback</h2>
		<?php
			//callback menggunakan array_map
			function my_callback($item) {
				return strlen($item);
			  }
			  
			  $strings = ["Calabria", "Brahim", "Tonali", "Saelaemakers"];
			  $lengths = array_map("my_callback", $strings);
			  print_r($lengths);
			  
		?>


<br><br>
<a href="https://www.w3schools.com/php/php_ref_overview.asp">Referensi fungsi lainnya pada PHP</a>

<p class="judul">latihan</p>
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

<html>
    <head>
        <title>latihan function</title>
    </head>
<?php
    function halo($nama = "broker", $watak = "gelap"){
        return "Selamat datang $nama si $watak !";
    }
?>
<h3>Halo.. <?= halo("nandoperd", "programmer"); ?></h3>
<h4>sekarang tanggal <?php echo date("d")?> bulan <?php echo date("m")?> tanggal <?php echo date("Y")?> </h4>
</html>

<html>
<head>
</head>
	<?php
		function kenal($nama="Goku", $kelas="niji"){
			return "Hei $nama dari kelas $kelas";
		}
	?>
	<p><?= kenal("Budi","7A")?></p>
</html>

 