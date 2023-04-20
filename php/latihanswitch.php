<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
    .card {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        font-size: 20px;
    }
    a:link.button2, a:visited.button2 {
    background-color: white;
    color: black;
    border: 2px solid green;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    
    a:hover.button2, a:active.button2 {
        background-color: green;
        color: white;
    }
</style>

<h3 class="judul">Latihan Switch</h3>

<?php
    //membuat banyak tampilan dengan 1 file code ini
    //membuat kondisi isi $view menggunakan ternary
    $view = isset($_GET['view']) ? $_GET['view'] : null;
    switch($view){
        default:
    
?>

    <!-- halaman 1 (default) -->
    <div class="card" style="background-color: #b5001b;">
            <h2>Halaman 1 : INZAGHI</h2>
            <p>Inzaghi, Pemain paling ditakuti Oliver Kahn.</p>
            <p>Striker dengan ketepatan dan pemosisian terbaik.</p>
    </div>
    <br>

    <!-- membuat link untuk mengarah ke code lainnya -->
    <a class="button2" href="latihanswitch.php?view=2">Halaman 2</a>

    <!-- switch tampilan ke view 2 -->
    <?php
    break;
    case "2":
    ?>

        <!-- halaman 2 -->
        <div class="card" style="background-color: #b4c728;">
            <h2>Halaman 2 : ROSSI</h2>
            <p>Rossi, Pembalap dengan nomor 46.</p>
            <p>Pembalap fenomenal pada masanya.</p>
        </div>
        <br>

        <a class="button2" href="latihanswitch.php?view=3">Halaman 3</a>

    <?php
    break;
    case "3":
    ?>

        <!-- halaman 3 -->
        <div class="card" style="background-color: #eff2ed; color: #696e66;">
            <h2>Halaman 3 : KHABIB</h2>
            <p>Khabib, Bintang UFC fenomenal.</p>
            <p>Singa sesungguhnya, membungkam si songong gregor.</p>
        </div>
        <br>

        <a class="button2" href="latihanswitch.php?view">Halaman 1</a>

    <!-- penutup switch -->
    <?php
    break;
    }
    ?>