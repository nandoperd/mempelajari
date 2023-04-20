<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">NUMBER</h1>

<p class="judul">integer</p>
<?php
    // perintah php untuk cek integer
    // is_int()
    // is_integer() - alias of is_int()
    // is_long() - alias of is_int()
    $x = 20;
    echo "20 => ";
    var_dump(is_int($x));
    echo "<br>";
    $y = 20.5;
    echo "20.5 => ";
    var_dump(is_int($y));
?>

<p class="judul">float</p>
<?php
    $x = 0.5;
    echo "0.5 => ";
    var_dump(is_float($x));
    echo "<br>";
    $y = -84848448;
    echo "-84848448 => ";
    var_dump(is_float($y));
?>

<p class="judul">infinity</p>
<?php
    // cek apakah nilai angka bisa dihitung atau tidak (infinity)
    $x = 1.9e411;
    $y = 1000996966869484584984;
    var_dump($x);
    echo "<br>";
    var_dump($y );
?>

<p class="judul">numeric</p>
<?php
    //cek dengan is_numeric apakah data termasuk number atau bukan
    $x = 200;
    var_dump(is_numeric($x));
    echo "<br>";
    $y = "200";
    var_dump(is_numeric($y));
    echo "<br>";
    $z = "yuhu";
    var_dump(is_numeric($z));
?>

<p class="judul">string & float to integer  </p>
<?php
    //float to int
    $x = 9392.404949;
    $intx = (int)$x;
    echo $intx;

    //string to int
    echo "<br>";
    $y = "9777.404949";
    $inty = (int)$y;
    echo $inty;

?>