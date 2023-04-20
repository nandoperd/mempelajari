<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
</style>

<h1 class="judul">JSON</h1>

<p class="judul">json_encode</p>
<?php
    //json pada dasarnya digunakan untuk pertukaran data
    //ada 2 jenis penggunaan json yaitu encode dan decode
    //encode berfungsi untuk akan mengubah data objek atau array dalam PHP menjadi data dalam bentuk JSON
    $nomor = array("Inzaghi"=>9, "Pirlo"=>21, "Maldini"=>3);

    echo json_encode($nomor);
?>

<p class="judul">json_decode</p>
<?php
    //adapun decode kebalikannya, merubah data json ke php
    //jika data json adalah string maka yg keluar adalah string, jika array adalah array
    // contoh decode string
    $json = "[1,2,3,4,5]";

    $data = json_decode($json);

    //implode berfungsi sebagai pemisah antar array
    echo implode("-", $data);
    echo "<br>";

    //contoh decode array
    //perhatikan penulisannya diawali dengan ' dan {}, dan valuenya dengan :
    $nomor = '{"Inzaghi":9, "Pirlo":21, "Maldini":3}';
    var_dump(json_decode($nomor));
    echo "<br>";

    //decode mengembalikan objek secara default
    //decode memiliki parameter kedua, jika disetel ke true, objek JSON didekodekan menjadi array asosiatif
    var_dump(json_decode($nomor, true));
    echo "<br>";

    echo "<p>Data Inzaghi<p>";
    //contoh penulisan dan pemanggilan decode yang rapih
    $jsonn = '{
        "nama" : "Inzaghi",
        "nomor" : "9",
        "posisi" : "CF",
        "club" : "AC Milan",
        "skills" : ["Offensive Awareness", "Finishing", "Super-sub"]
    }';

    $inzaghi = json_decode($jsonn);

    echo "Nama : {$inzaghi->nama} <br>";
    echo "Nomor Punggung : {$inzaghi->nomor} <br>";
    echo "Posisi : {$inzaghi->posisi} <br>";
    echo "Club : {$inzaghi->club} <br>";
    echo "Skills : " . implode(", ", $inzaghi->skills);
    echo "<br>";

    //penulisannya juga bisa seperti memanggil array
    //dengan syarat harus dibuat parameter keduanya jadi true
    $inz = json_decode($jsonn, true);
    echo $inz["nama"] . "<br>";
    echo $inz["nomor"] . "<br>";
    echo $inz["club"] . "<br>";
    echo $inz["posisi"] . "<br>";

    //looping decode menggunakan foreaach
    foreach ($inzaghi as $inza => $value) {
        echo $inza . " : " . $value . "<br>";
    }
    //error karena skills nya bersifat array
?>
