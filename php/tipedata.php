<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">TIPE DATA</h1>

<p class="judul">string</p>
<?php
    $x="Halo Broker!";
    echo $x;
?>

<p class="judul">integer</p>
<!-- bilangan non desimal -->
<?php
    $i=8080;
    var_dump($i);
?>

<p class="judul">float</p>
<!-- bilangan desimal, float di php beda ya sama di css -->
<?php
    $f=10.999;
    var_dump($f);
?>

<p class="judul">boolean</p>
<!-- biasanya digunakan pada kondisi/tes, nilainya true atau false -->
<?php
    $x=true;
    $y=false;
    if (1+1==2) {
        echo $x;
    } else {
        echo $y;
    }
    //maka yg muncul adalah 1 (true) karena kondisinya jika 1+1=2 maka tampilkan x (true)
?>

<p class="judul">array</p>
<!-- array adalah satu variabel yang memiliki banyak data -->
<?php 
    $motor= ["Megapro", "Supra", "Mio"];
    var_dump($motor);
?>
<br><br>
cara lama :<br>
<!-- ini adalah cara dulu penulisan array -->
<?php  
    $mobil = array("Kijang","Chevrolet","Fortuner");
    var_dump($mobil);
?>  

<p class="judul">Objek</p>
<!-- menggunakan class, biasanya digunakan pada pemrograman OOP -->
<?php
    class Motor {
        public $merk;
        public $warna;
        public function __construct($merk, $warna) {
            $this->merk = $merk;
            $this->warna = $warna;
        }
        public function label() {
            return "Motor merk ". $this->merk . " berwarna " . $this->warna;
        }
    }

    $Motorku = new Motor("Honda","Hitam");
    echo $Motorku->label();
?>

<p class="judul">null</p>

<?php
//null ada data kosong (tidak bernilai)
    $x=null;
    var_dump($x);
?>