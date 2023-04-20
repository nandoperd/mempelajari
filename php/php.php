<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">PHP</h1>

<!-- php -->
<?php
    echo "PHP";
?>
<br>

<!-- variable -->
<p class="judul">variabel</p>

<?php
    $writer = "nandoperd";
    echo $writer;
    echo "<br> hai, Saya $writer!";
    echo "<br> hai, Saya " . $writer . "!";
?>

<!-- variable scope ada tiga : local , global, static-->
<!-- contoh menggunakan function -->

<!-- global -->
<p class="judul">global</p>

<?php
    $x = 7; // global (di luar function)

    function myGlobal() {
    // menggunakan $x di dalam function akan menyebabkan error
    // echo "<p>Variable x inside function is: $x</p>";
    }
    myGlobal(); //memanggil function

    echo "<p>Nilai x adalah: $x</p>";
?>

<!-- local -->
<p class="judul">local</p>
<?php
    function myLocal() {
        $x = 7; // local scope (variabel yang dideklarasi di dalam function hanya dapat dipanggil di function tersebut)
        echo "<p>Nilai x adalah: $x</p>";
      }
      myLocal(); //memanggil function
      
      // bedanya dengan global adalah global nilainya ditulis di luar function kalo local di dalam
      echo "<p>Nilai x adalah: $x</p>";
?>

<!-- menggunakan key global -->
<p class="judul">key global</p>

<?php
    $x = 7;
    $y = 100;
    function myHitung() {
        global $x, $y; //key global digunakan untuk dapat mengakses variabel di atas (7 dan 100) ke dalam fungsi
        // $GLOBALS['y'] = $GLOBALS['x'] * $GLOBALS['y']; //bisa juga ditulis seperti ini
        $y = $x * $y; 
    }
    myHitung();
    echo $y; //output dari variabel $y
?>
<br>
<!-- static -->
<!-- variabel static digunakan agar nilai variabel tetap bisa dipanggil pada perintah di bawah, karena pada dasarnya 
ketika perintah/function sudah dijalankan variabel otomatis akan terhapus -->
<p class="judul">static</p>

<?php
function myStatic() {
  static $x = 0; //key static
  echo $x; //memanggil variabel
  $x++; //perulangan variabel (looping)
}

myStatic(); //run function
echo "<br>";
myStatic();
echo "<br>";
myStatic();
?>

<!-- data type -->
<p class="judul">tipe data</p>

<?php
// string : urutan karakter
$x = "Hello world!"; //string

// integer : angka non desimal
$y = 7070; //integer, tidak perlu diiringi kutip

// float : angka yang memiliki desimal
$z = 10.999; //float

//boolean : true atau false
$b = true; //boolean

//array : dapat menyimpan banyak nilai dalam satu variabel tunggal
$kopi = array("espresso", "americano", "latte"); //$kopi menampung banyak nilai

echo $x; echo"<br>";

echo "(var dump)"; echo"<br>";
echo var_dump($y); echo"<br>";//menampilkan tipe dan nilai data 
echo var_dump($z); echo"<br>";
echo var_dump($kopi);

?>

<br>

<p class="judul">object (class)</p>

<?php
class Motor { //deklarasi class motor
    public $merk; //deklarasi objek-objek class motor
    public $warna;
    public function __construct($merk, $warna) //dengan fungsi __construct(), PHP akan secara otomatis memanggil fungsi ini saat Anda membuat objek dari kelas
    {
        // Variabel $this merupakan variabel khusus PHP dalam OOP yang digunakan untuk menunjuk sebuah objek, ketika kita mau mengaksesnya dalam sebuah class.
        // $this juga sering disebut dengan pseuo-variable.
        $this->merk = $merk;
        $this->warna = $warna;
    }
    public function pesan(){ //membuat function message
        return "Motor Gua " . $this->merk . " " . $this->warna . "!"; 
    }
}
$motorKu = new Motor("Megapro", "Putih");
echo $motorKu -> pesan();
echo "<br>";
$motorKu = new Motor("Supra", "Item");
echo $motorKu -> pesan();
?>

<br>

<p class="judul">latihan</p>


<?php
    //variabel
    $name="BROKER";
    echo "My name is ".$name;
?>

<br>

<?php
    //global
    $name = "KAKA";
    function Bola(){
    }
    Bola();
    echo "<h2>The best AMF is $name</h2>";
?>

<?php
    //OOP
    class Club {
        public $coach;
        public $player;
        public function __construct($coach, $player)
        {
            $this->coach = $coach;
            $this->player = $player;
        }
        public function info(){
            return "Kiper " . $this->coach . " " . $this->player;
        }
    }
    $tim = new Club("Milan", "Dida");
    echo $tim -> info();
    echo "<br>";
    $tim = new Club("Madrid", "Casillas");
    echo $tim -> info();
?>

<br>

<?php
    class Alamat {
        public $kota;
        public $negara;
        public function __construct($kota, $negara)
        {
            $this->kota = $kota;
            $this->negara = $negara;
        }
        public function form(){
            return $this->kota. " ". "berasal dari Negara " . $this->negara;
        }
    }
    $info = new Alamat("Jakarta","Indonesia");
    echo $info->form();
?>
<br>

<?php
    class Komik {
        public $anime;
        public $jagoan;
        public function __construct($anime, $jagoan)
        {
            $this->anime = $anime;
            $this->jagoan = $jagoan;
        }
        public function ket(){
           return "di ". $this->anime. " " ."jagoanku adalah ". $this->jagoan;
        }
    }
    $oh = new Komik("Naruto","Shikamaru");
    echo $oh->ket();
    echo "<br>";
    $ya = new Komik("One Piece","Sanji");
    echo $ya->ket();
?>

