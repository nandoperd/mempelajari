<html>
    <head>
        <title>latihan function</title>
    </head>
<?php
    function halo($nama = "broker", $watak = "gelap"){
        return "Selamat datang $nama si $watak !";
    }
?>
<h3>Halo.. <?= halo("nandoperd", "programmer"); ?></h3>
<h4>sekarang tanggal <?php echo date("d")?> bulan <?php echo date("m")?> tanggal <?php echo date("Y")?> </h4>
</html>

