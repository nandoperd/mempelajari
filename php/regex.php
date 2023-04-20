<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">REGEX</h1>

<?php
    //regex berfungsi untuk melakukan pencarian, pencocokan, dan manipulasi teks
    //regex menggunakan preg_match
    $str = "Halo Broker";
    $pattern = "/Broker/i";
    echo preg_match($pattern, $str); 
    //pattern (pola) memerintahkan pencarian kata broker
    //preg match akan mengembalikan angka 1 jika terdapat pattern yang sesuai, jika tidak output nya 0
    echo "<br>";

    //menggunakan preg_match_all, fungsinya untuk menghitung ada berapa banyak pola yang sama dengan yg ditentukan
    $kalimat = "Tanpa tai tidak bisa mencintai apalagi di taiwan";
    $pattern = "/tai/i";
    echo $kalimat . "<br>";
    echo "Jumlah tai = ";
    echo preg_match_all($pattern, $kalimat);
    echo "<br>";

    //menggunakan pref replace, fungsinya untuk replace data sesuai pola yang ditentukan
    $kal = "Kamu tanya? kamu bertanya-tanya?";
    $pattern = "/tanya/i";

    echo preg_replace($pattern, "tai", $kal);
?>