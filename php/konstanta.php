<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">KONSTANTA</h1>

<?php 
    //rumus membuat konstanta
    //define(name, value, case-insensitive)
    // contoh
    // define("salam", "Assalamu'alaikum");
    // echo salam;

    //menggunakan case-insensitive
    define("salam", "Assalamu'alaikum", false);
    echo salam;
    //kode ini akan error, karena infonya sejak php 7 tidak lagi memerlukan argumen ketiga di dalam konstanta
    //sengaja ditulis false, karena jika true pada php 7 ke atas akan error
?>

<p class="judul">konstanta array</p>
<?php
    define("hero",[
        "badang",
        "johnson",
        "argus",
    ]);
    echo hero[0];
?>

<p class="judul">konstanta dalam fungsi</p>
<?php
    define("peterpan", "Tak ada yang abadi");

    // fungsi konstanta selalu bersifat global
    function lagu(){
        echo peterpan;
    }

    lagu();
?>
