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


