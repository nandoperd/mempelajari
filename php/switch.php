<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">SWITCH</h1>

<?php
    //switch digunakan untuk memilih satuan code yang ingin kita eksekusi
    //contoh
    $persen = "50%";

    switch($persen){
        case "50%":
        echo "Data pembayaran 50%";
        break;
        case "75%":
        echo "Data pembayaran 75%";
        break;
        case "100%":
        echo "Data pembayaran 100%";
        break;
        default:
        echo "Data pembayaran";
    }
    //switch sangat membantu untuk membuat 1 file code menjadi banyak halaman di website
    //lihat pada halaman latihan switch
?>