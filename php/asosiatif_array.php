<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">ASOSIATIF ARRAY</h1>
<?php
//mencoba array di dalam array
//ini sangat berguna untuk dipakai pada pemrograman OOP kedepannya
/*$mahasiswa=[ //ini ditulis jadi pembuka karna array yang mau kita masukan banyak
["nandoperd","laki-laki","Informatika","Indonesia"],
["nandoperd","laki-laki","Informatika","Indonesia"],
["nandoperd","laki-laki","Informatika","Indonesia"]
];
*/

//array asosiatif
//key-nya adala string yg kita buat sendiri, jaadi sudah bukan index lagi
//array assosoatif berbeda dengan array numerik, kita memeasukkan key nya disini, dan ketika arrray sudah tau mana key-nya, maka dia tidak lagi terpaku pada indeks seperti array numerik 
//contoh
$mahasiswa=["nama" => "nandoperd", /*nah tanda panah ini adalah array asosiatif*/ 
			"jk" => "laki-laki",
			"prodi" => "Informatika",
			"negara" => "Indonesia",			
];
//penyebutan : nama adalah string dan nandoperd adalah data dalam string tersebut
echo $mahasiswa["nama"]; //nah maka yg ditulis bukan lagi index tapi string buatan kita
echo "<br>";

//nah, kalo masiwanya banyak, maka:
$masiwa=[ //kita pakai array numerik lagi, yaitu bukaaan besar ini numerik (index)
		["nama" => "nandoperd", 
		 "jk" => "laki-laki",
		 "prodi" => "Informatika",
		 "email" => "nandoperd@gmail.com",
		 "gambar"=> "man.png"
		 ],
		 
		 ["nama" => "ariel", 
		 "jk" => "perempuan",
		 "prodi" => "SIG",
		 "email" => "a@gmail.com",
		 "gambar"=> "woman.png"
		 ]
		 ];
echo $masiwa[1]["email"];	//nah maka akan keluar nim nya ariel, ingat penulisannya asalah [index] ["string"]
?>

<!-- memanggil data array dengan html -->
<html>
<head>
	<title>Asosiatif array</title>
</head>
<body>
<h1> Daftar nama Masiwa </h1>
<?php foreach($masiwa as $mhs) : ?>
<!-- foreach adalah perulangan khusus untuk pembacaan nilai array dimana array memiliki pasangan key dan value -->
<ul>
	<li> 
    <img width=10%; src="img/<?=$mhs["gambar"]; ?> ">
    </li>
    <li> Nama : <?= $mhs["nama"]; ?> </li> <?php //nah itu untuk nampilin hanya perlu string yg kita buat saja tidak perlu indexnya ?>
    <li> Jenis Kelamin : <?= $mhs["jk"]; ?> </li>
    <li> Prodi : <?= $mhs["prodi"]; ?> </li>
    <li> email : <?= $mhs["email"]; ?> </li>
</ul>
<?php endforeach; ?>
<!-- penutup forreach -->
</body>
</html>

<p class="judul">latihan</p>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php
		$calcio = [ [
			"club" => "Milan",
			"gk" => "Maignan",
			"cb" => "Tomori",
			"cm" => "Tonali",
			"fw" => "Leao",
			"png" => "milan.png",
		],
		[
			"club" => "Madrid",
			"gk" => "Courtois",
			"cb" => "Alaba",
			"cm" => "Modric",
			"fw" => "Benzema",
			"png" => "madrid.png",
		]
		];
	?>

	<?php foreach ($calcio as $c) : ?>
		<div style="background-color: tomato;color: white;padding: 10px;font-size: 16px;">
		<img style="width: 5%;" src="img/<?= $c["png"];?>" alt="">
		<h2><?= $c["club"]; ?></h2>
		<ul>
			<li>GK : <?= $c["gk"]; ?></li>
			<li>CB : <?= $c["cb"]; ?></li>
			<li>CM : <?= $c["cm"]; ?></li>
			<li>FW : <?= $c["fw"]; ?></li>
		</ul>
		</div>

	<?php endforeach;?>
	
</body>
</html>
