<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }

    a {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<h1 class="judul">DATABASE</h1>

<a href="database/belajar.sql">download database</a>

<?php
//beberapa basis data : Oracle, MySQL, PostgreSQL, MongoDB
// yang saya pakai adalah MySQL menggunakan aplikasi XAMPP
// saya menggunakan database belajar.sql pada belajar PHP ini
// untuk menghubungkan database dengan PHP dapat menggunakan :
//  Ekstensi MySQL (lama), MySQLI (baru), dan PDO (PHP data object) dimana dengan
//  PDO kita bisa terhubung dengan banyak database
?>

<?php
    //koneksi database
    mysqli_connect("localhost", "root", "", "belajar");

    //menyimpan koneksi di atas ke dalam variabe (nama variabel ini bebas);
    $conn = mysqli_connect("localhost", "root", "", "belajar");

    //mengambil data query
    //menulis variabel koneksi dan perintah ambil data ke tabel database
    $result = mysqli_query($conn, "SELECT * FROM bola");
    //dengan result, jika koneksi berhasil maka jalan, namun kalo gagal akan menampilkan error

    echo "<p> data result </p>";
    //cek database
    var_dump($result);

    //kondisi cek database
    if (!$result) {
        echo mysqli_error($conn);
    }

    //ambil data (fetch : ngambil data) dari object result (bola)
    //4 cara mengambil data dari object result
    // mysqli_fetch_row() -> mengambil data row dan mengembalikkan array numerik
    // mysqli_fetch_assoc() -> mengembalikan data array asosiatif
    // mysqli_fetch_array() -> mengembalikan data keduanya
    // mysqli_fetch_object() ->
    echo "<p> <br> </p>";

    echo "<p> fetch row </p>";
    //memasukkan fetch ke variabel
    $bola = mysqli_fetch_row($result);
    // var_dump($bola);

    var_dump($bola[2]); //mengambil data pada index ke 2 (club), harus menggunakan numerik karena menggunakan row

    echo "<p> <br> </p>";

    echo "<p> fetch assoc </p>";
    //memasukkan fetch ke variabel
    $bola = mysqli_fetch_assoc($result);

    var_dump($bola["club"]); //mengambil data pada index ke 2 (club), harus menggunakan array asosiatif

    echo "<p> <br> </p>";

    echo "<p> fetch array </p>";
    //memasukkan fetch ke variabel
    $bola = mysqli_fetch_array($result);

    var_dump($bola["club"]);
    var_dump($bola["3"]); 
    //fetch array bisa menggunakan keduanya (row dan assoc)

    echo "<p> <br> </p>";

    // sementara fetch object belum digunakan disini
    // echo "<p> fetch object </p>";
    //memasukkan fetch ke variabel
    // $bola = mysqli_fetch_object($result);

    //object menggunakan panah (dasar OOP)
    // var_dump($bola->nama);
    // var_dump($bola->club); 
    // var_dump($bola->posisi); 
    //fetch array bisa menggunakan keduanya (row dan assoc)

    // echo "<p> <br> </p>";
?>
