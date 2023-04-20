<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">ARRAY</h1>
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
echo "<p>var_dump</p>";
//var_dump()
var_dump($bulan);

echo "<p>print_r</p>";
// print_r()
print_r($hari);

echo "<p>count</p>";
//count, menghitung jumlah string/data pada array
echo count($hari);
echo "<br>";

echo "<p>Looping</p>";
//membuat looping array dengan for
$panjang = count($hari);
for ($i=0; $i < $panjang ; $i++) { 
    echo $hari[$i] . "<br>";
}

echo "<p>menampilkan 1 element</p>";
//menampilkan 1 element
echo $hari[0]; //nah ingat index dimulai dari 0
echo"<br>";
echo $bulan[1];

echo "<p>menambahkan elemen baru pada array</p>";
//menambahkan elemen baru pada array
var_dump($bulan);
$bulan[]="april";
$bulan[]="mei";
echo"<br>";
var_dump($bulan); //nah ntar dia bakalan nambah
?>

<p class="judul">sorting array</p>
<?php
    //menyortir data array
    //contoh
    $hero = array("Badang", "Johnson", "X-Borg");
    // sort($hero); //sortir sesuai abjad dari kecil ke besar (Ascending)
    rsort($hero); //sortir sesuai abjad dari besar ke kecil (Descending)


    $panjang = count($hero);
    for ($i=0; $i < $panjang; $i++) { 
        echo $hero[$i] . "<br>";
    }
    echo "<br>";

    //sorting data array asosiatif
    $no = array("Kaka"=>"22", "Shevchenko"=>"7", "Inzaghi"=>"9");
    //ASC
    asort($no); //sorting ASC nilai value(nomor : mengurutkan nomor terkecil ke besar)
    ksort($no); //sorting ASC key(nama : mengurutkan nama sesuai abjad awal)
    //DESC
    arsort($no); //sorting DESC nilai value(nomor : mengurutkan nomor terbesar ke kecil)
    krsort($no); //sorting DESC key(nama : mengurutkan nama terbesar ke kecil)

    foreach ($no as $n => $n_value){
        echo $n . " : " . $n_value . "<br>";
    }
?>

<p class="judul">Asosiatif array</p>
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

<p class="judul">latihan</p>

<?php
    $milan = ["Dida", "Stam", "Nesta"];

    var_dump($milan);
    echo "<br>";
    $milan[]="Cafu";
    $milan[]="Maldini";
    print_r($milan)
?>