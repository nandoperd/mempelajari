<!-- php -->
<?php
    echo "PHP";
?>
<br>

<!-- variable -->
<?php
    $writer = "nandoperd";
    echo $writer;
    echo "<br> hai, Saya $writer!";
    echo "<br> hai, Saya " . $writer . "!";
?>

<!-- variable scope ada tiga : local , global, static-->
<!-- contoh menggunakan function -->

<!-- global -->
<?php
    $x = 7; // global (di luar function)

    function myGlobal() {
    // menggunakan $x di dalam function akan menyebabkan error
    //   echo "<p>Variable x inside function is: $x</p>";
    }
    myGlobal(); //memanggil function

    echo "<p>Variable x outside function is: $x</p>";
?>

<!-- local -->
<?php
    function myLocal() {
        $x = 7; // local scope (variabel yang dideklarasi di dalam function hanya dapat dipanggil di function tersebut)
        echo "<p>Variable x inside function is: $x</p>";
      }
      myLocal(); //memanggil function
      
      // menggunakan $x di luar function akan menyebabkan error
      //tapi kok bisa ya wkwk mungkin ini php 8
      echo "<p>Variable x outside function is: $x</p>";
?>

<!-- menggunakan key global -->
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

echo $x;
echo var_dump($y); //menampilkan tipe dan nilai data
echo var_dump($z); 
echo var_dump($kopi); 

?>
<br>

<?php
//object : object pasti berurusan dengan class, class adalah wadah yang menampung objek tersebut
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
    public function message(){ //membuat function message
        return "Motor Gua " . $this->merk . " " . $this->warna . "!"; 
    }
}
$motorKu = new Motor("Megapro", "Putih");
echo $motorKu -> message();
echo "<br>";
$motorKu = new Motor("Supra", "Item");
echo $motorKu -> message();
?>
