<?php
//variable scope/ lingkup variabel
//lingkup variabel yg berada di luar function itu berbeda dengan lingkup yang berada di dalam function. 
//jadi variabel yg ada di dalam function tidak akan mengenali variabel yg ada di luar function
/* contoh
$x=10;

function tampilX(){
	global $x; //nah global ini gunanya untuk mencari apakah ada $x di luar function, jika ada maka ia akan memunculkannya
	echo $x;
}
tampilX();
*/


//SUPERGLOBALS
//adalah variabel milik PHP yg merupakan Array asosiatif
//contoh
//GET, nah karna dia array asosiatif, maka harus dipanggil menggunakan var_dump/ print_r

var_dump ($_GET);
//maka yg keluar nantinya adalah array yg masih 0
//nah, untuk request GET cara codingnya adalah :  URL yg di atas kita tambahkan sepeti ini contohnya : (URL)?name=zlatan&club=milan   penjelasannya adalah: & pertama itu artinya saya mau memasukkan data ini ke dalam array GET, lalu tinggal dipasangkan key dan indexnya dengan =, lalu & kedua adalah tanda jika kita ingin memasukkan banyak data.
$player=[ //kita pakai array numerik lagi, yaitu bukaaan besar ini numerik (index)
		["name" => "zlatan", 
		 "club" => "milan",
		 "gambar"=> "nando.png"
		 ],
		 
		 ["name" => "adriano", 
		 "club" => "inter",
		 "gambar"=> "ariel.png"
		 ]
		 ];
?>
<html>
<head>
	<title>belajar GET</title>
</head>
<body>
<h1> Daftar Player </h1>
<ul>
<?php foreach($player as $p) : ?>
    <li> 
    <a href="isilatihanget.php?name=<?=$p["name"];?>&club=<?=$p["club"];?>&gambar=<?=$p["gambar"];?>"><?=$p["name"]?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>






