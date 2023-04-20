<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">MATH</h1>

<p class="judul">Pi</p>
<?php 
    echo(pi());
?>

<p class="judul">min & max</p>
<?php
    //min & max untuk menampilkan bilangan terkecil dan terbesar
    echo min(20,90,900) . "<br>";
    //bisa juga ditulis :
    echo(min(0, 150, 30, 20, -8, -200) . "<br>");

    echo max(20,90,900) . "<br>";
    //bisa juga ditulis :
    echo(max(0, 150, 30, 20, -8, -200) . "<br>");
?>

<p class="judul">abs</p>
<?php
    //membuat angka menjadi positif
    echo (abs(-9.7));
?>

<p class="judul">sqrt</p>
<?php
    //sqrt (square root) menghitung bilangan akar pangkat 2
    echo (sqrt(49));
?>

<p class="judul">round</p>
<?php
    //mebulatkan bilangan
    echo (round(0.50));
    echo "<br>";
    echo (round(1.49));
    echo "<br>";
    echo (round(-1.60));
    echo "<br>";
?>

<p class="judul">rand</p>
<?php
    //menghasilkan angka random
    echo (rand());

    echo "<br>";

    //menghasilkan angka random antara
    echo (rand(10,20));
?>