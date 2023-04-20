<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">OPERATOR DATA</h1>

<p class="judul">operator aritmatika</p>

<?php
    //penjumlahan
    echo "penjumlahan (+) <br>";
    $a = 70;
    $b = 30;
    
    $c = $a + $b;
    echo $c;
?>
<br>
<?php
    //pengurangan
    echo "pengurangan (-) <br>";
    $a = 70;
    $b = 30;
    
    $c = $a - $b;
    echo $c;
?>
<br>
<?php
    //perkalian
    echo "perkalian (*) <br>";
    $a = 7;
    $b = 7;
    
    $c = $a * $b;
    echo $c;
?>
<br>
<?php
    //pembagian
    echo "pembagian (/) <br>";
    $a = 100;
    $b = 10;
    
    $c = $a / $b;
    echo $c;
?>
<br>
<?php
    //modulus
    echo "modulus/sisa hasil bagi (%) <br>";
    $a = 5;
    $b = 2;
    
    $c = $a % $b;
    echo $c;
?>
<br>
<?php
    //eksponensial
    echo "eksponensial/pangkat (**) <br>";
    $a = 3;
    $b = 3;
    
    $c = $a ** $b;
    echo $c;
?>

<p class="judul">operator assignment</p>
<?php
    //pada dasarnya operator assignment sama dengan aritmatik,bedanya assignmet menggunakan =
    $a = 5;
    echo $a;

    echo "<br>";

    // penjumlahan dan semacamnya
    $b = 10;
    $b += 10;
    echo $b;

    echo "<br>";

    $c = 5;
    $c %= 2;
    echo $c;
?>

<p class="judul">operator perbandingan</p>
<?php 
    echo "sama dengan (==) <br>";
    $a = 100;
    $b = 100;
    var_dump($a == $b); //true
    echo "<br><br>";

    echo "identik (===) <br>";
    $a = 100;
    $b = "100";
    var_dump($a === $b); //false karena tidak identik (tipe data beda a integer b string)
    echo "<br><br>";

    echo "tidak sama dengan (!=) <br>";
    $a = 100;
    $b = "100";
    var_dump($a != $b); //false karena sama
    echo "<br><br>";

    echo "tidak sama dengan (!= atau <>) <br>";
    $a = 100;
    $b = "100";
    var_dump($a != $b); //false karena sama
    var_dump($a <> $b);
    echo "<br><br>";

    echo "tidak identik (!==) <br>";
    $a = 100;
    $b = "100";
    var_dump($a !== $b); //true
    echo "<br><br>";

    echo "lebih besar dari (>) <br>";
    $a = 100;
    $b = 99;
    var_dump($a > $b); //true
    echo "<br><br>";

    echo "lebih kecil dari (<) <br>";
    $a = 100;
    $b = 99;
    var_dump($a < $b); //false
    echo "<br><br>";

    echo "lebih besar atau sama dengan dari (>=) <br>";
    // berbeda dengan mtk yang ditulis =>
    $a = 100;
    $b = 100;
    var_dump($a >= $b); //true
    echo "<br><br>";

    echo "lebih kecil dari (<=) <br>";
    $a = 100;
    $b = 99;
    var_dump($a <= $b); //false
    echo "<br><br>";
?>

<p class="judul">operator logika</p>
<?php
    echo "dan (<strong>and</strong> atau <strong>&&</strong>) <br>";
    $a = 7;
    $b = 5;

    if ($a == 7 && $b == 5) {
        echo "Betul";
    } else {
        echo "Salah";
    };
?>
<br><br>
<?php
    echo "atau (<strong>or</strong> atau <strong>||</strong>) <br>";
    //atau normal (jika salah satu atau keduanya)
    $a = 7;
    $b = 5;

    if ($a == 7 or $b == 5) {
        echo "Betul";
    } else {
        echo "Salah";
    };
?>
<br><br>
<?php
    echo "atau salah satu (<strong>xor</strong>) <br>";
    $a = 7;
    $b = 5;

    if ($a == 7 xor $b == 5) {
        echo "Betul";
    } else {
        echo "Salah";
    }; //karena xor hanya salah satu saja yang sesuai data tidak bisa 2 2 nya
?>
<br><br>
<?php
    echo "Not (<strong>!</strong>)<br>";
    $a = 7;

    if ($a !== 10) {
        echo "Betul";
    };
?>
<br>

<p class="judul">operator string (penggabungan)</p>
<?php
    // menggunakan operator .
    $k1 = "Selamat";
    $k2 = " Lebaran";
    echo $k1 . $k2;

    echo "<br>";

    // menggunakan operator .=
    $l1 = "Selamat";
    $l2 = " Malam";
    $l1 .= $l2;
    echo $l1;
?>

<p class="judul">operator array</p>
<?php
    //operator array digunakan untuk penggabungan array
    //union (penyatuan array)
    echo "+ (union/penyatuan array) <br>";

    $x = array("a"=>"Sanji", "b"=>"Usopp");
    $y = array("c"=>"Luffy", "d"=>"Zoro");
    print_r($x+$y);
    echo "<br>";

    //pada dasarnya operator array sama dengan aritmatika
    //yang memiliki operator : == (sama dengan) ===(identik) != dan <> (tidak sama dengan) !== (tidak identik)
    $a = array("na"=>"naruto","sa"=>"sasuke");
    $b = array("ka"=>"kakashi", "as"=>"asuma");

    var_dump($a != $b); //true
?>

<p class="judul">operator ternary</p>
<?php
    //Operator ternary digunakan untuk membuat kondisi, menggunakan ? dan :
    //dimana setelah ? adalah jawaban true, setelah : adalah jawaban false
    //contoh
    $betul = false;
    $jawab = $betul ? "iya" : "nggak";

    echo "Apakah kamu seekor babi? ";
    echo $jawab; 
?>
<br>
<?php
    //contoh lain
    //membuat pengecekan data menggunakan empty
    echo "Status user = ";
    echo $status = (empty($user)) ? "anon" : "logged in";
    echo "<br>";
    echo "Status user = ";
    $user = "broker";
    echo $status = (empty($user)) ? "anon" : "logged in";
?>
<br>
<?php
    //null coalescing (pengembalian nilai variabel,fungsi ini diperkenalkan pada PHP 7)
    //menggunakan ??
    // contoh
    echo $user = $_GET["user"] ?? "anon"; //jika $_GET["user"] null maka isi $user adalah setelah ??
    echo "<br>";

    $motor = "Megapro";
    echo $motor = $motor ?? "Supra"; //outputnya adalah megapro karena $motor tidak null
?>

<br><br>
<a href="https://www.petanikode.com/php-operator/">referensi lainnya</a>