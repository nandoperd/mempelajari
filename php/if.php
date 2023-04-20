<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">IF</h1>

<p class="judul">if</p>
<?php
    //if jika 1 kondisi
    $x = 5;
    if ($x < 10){
        echo "Halo semuanya!";
    }
?>

<p class="judul">if else</p>
<?php
    // if else jika 2 kondisi
    $y = 10;
    if($y = 10){
        echo "Benar itu";
    }else{
        echo "salah itu";
    }
    echo "<br>";

    $jam = date("H");
    if($jam < 20){
        echo "Siang";
    }else{
        echo "Malam";
    }
?>

<p class="judul">if elseif else</p>
<?php
    //if jika lebih dari 2 kondisi
    $jam = date("H");
    if($jam < 10){
        echo "pagi";
    } elseif($jam < 20) {
        echo "siang";
    } else {
        echo "malam";
    }
?>

