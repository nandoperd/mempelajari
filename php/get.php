<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">GET</h1>
<?php 
//SUPERGLOBAL
//maka yg keluar nantinya adalah array yg masih 0
//nah, untuk request GET cara codingnya adalah :  URL yg di atas kita tambahkan sepeti ini 
// contoh : (URL)?name=pirlo&club=milan
// & pertama itu artinya saya mau memasukkan data ini ke dalam array GET, lalu tinggal dipasangkan key dan indexnya dengan =, lalu & kedua adalah tanda jika kita ingin memasukkan banyak data (bisa berarti jeda/spasi)
$player=[ //kita pakai array numerik lagi, yaitu bukaaan besar ini numerik (index)
		["name" => "IBRAHIMOVIC", 
		 "club" => "AC MILAN",
		 "gambar"=> "milan.png"
		 ],
		 ["name" => "BENZEMA", 
		 "club" => "REAL MADRID",
		 "gambar"=> "madrid.png"
		 ]
		];
?>

<html>
<head>
	<title>Get</title>
</head>
<body>
<h1> Daftar Player </h1>
<ul>
<?php foreach($player as $p) : ?>
	<li>
		<!-- data get di atas akan dipanggil pada file isibelajarget.php -->
		<a href="isiget.php?name=<?=$p["name"];?>&club=<?=$p["club"];?>&gambar=<?=$p["gambar"];?>"><?=$p["name"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
