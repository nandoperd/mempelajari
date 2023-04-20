<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">STRING</h1>

<?php
    $x = "Leonardo";
    echo strlen($x); //kependekan dari string length, untuk menghitung jumlah string

    echo "<br>";

    $y = "Hari yang cerah untuk jiwa yang sepi";
    echo str_word_count($y); //menghitung jumlah kata

    echo "<br>";

    $z = "Kodok Kebolak";
    echo strrev($z); //kependekan dari string reverse, untuk membalikkan string

    echo "<br>";

    echo strpos("Selamat pagi!", "pagi");
    //strpos untuk menghitung jumlah string sebelumnya pada kalimat yang dicari

    echo"<br>";

    echo str_replace("pagi", "malam", "Selamat pagi!" );
    //mengganti string/karakter yang ada di dalam kalimat
?>

<p class="judul">latihan</p>
<?php
    $x = "Selamat";
    $y = "Malam";
    $z = $x . $y; //untuk menggabungkan string harus menggunakan operator titik (.)
    echo strlen($z); //output 12

    echo "<br>";

    $kal = "Pada baris ketiga, terdapat kesalahan penggunaan operator matematika (+) untuk menggabungkan dua string ($x dan $y). Seharusnya digunakan operator penggabung string (.), sehingga perintah tersebut menjadi $z = $x . $y;
    Pada baris keempat, output seharusnya adalah 13, karena panjang string hasil penggabungan $x dan $y adalah 13 karakter, bukan 12.";
    echo str_word_count($kal);

    echo "<br>";

    $r = "Upin dan Ipin inilah dia";
    echo str_replace("Upin", "Broker", $r);
?>