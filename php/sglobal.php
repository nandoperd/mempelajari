<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">GLOBALS</h1>

<?php
    //super global membuat variabel dapat digunakan pada semua block kode
    $x = 33;
    $y = 66;
    
    function tambah() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    tambah();
    echo $z;

    //bisa juga ditulis 
    global $z;//contohnya
    //lihat di koneksi.php ada banyak penggunaan variabel glbal dengan contoh di atas
?>