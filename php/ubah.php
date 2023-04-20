<?php
    //memulai session
    session_start();
    
    //cek session dari halaman login
    if (!$_SESSION["login"]) {
        header("Location: login.php");
        exit;
    }
    
    // koneksi
    require "koneksi.php";

    //ambil data id
    $id = $_GET["id"];

    //buat variabel untuk ambil query berdasarkan id melalui fungsi di koneksi.php
    //index 0 di akhir untuk memerintahkan ketika query dipanggil langsung diarahkan untuk mengambil data
    //array ke 0 (pertama)
    $p = query("SELECT * FROM bola WHERE id = $id")[0];
    // var_dump($p["nama"]);

    //cek submit sudah diklik atau belum
    if (isset($_POST["submit"])){

        //cek data ubah yang dikirim ke fungsi koneksi.php
        if ( ubah($_POST)>0) {
            // echo "data berhasil ditambahkan!";
            //membuat notif berhasil menggunakan java script
            echo "<
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'looping2.php';
                </script>
            ";
        } else {
            //echo "data gagal ditambahkan";
            //membuat notif berhasil menggunakan java script
            echo "<
            <script>
                alert('data gagal diubah');
                document.location.href = 'looping2.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Player</title>
</head>
<body>
    <h1>Ubah Player</h1>

    <!-- form jika kosong maka akan kembali ke halaman ini sendiri -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="id" id="id" value="<?=$p["id"];?>">
            <input type="hidden" name="gambarLama" id="gambarLama" value="<?=$p["gambar"];?>">
            <li>
                <label for="nama">Nama  :</label>
                <input type="text" name="nama" id="nama" value="<?=$p["nama"];?>" required>
            </li>
            <br>
            <li>
                <label for="club">Club  &nbsp;&nbsp;:</label>
                <input type="text" name="club" id="club" value="<?=$p["club"];?>" required>
            </li>
            <br>
            <li>
                <label for="posisi">Posisi  :</label>
                <input type="text" name="posisi" id="posisi" value="<?=$p["posisi"];?>" required>
            </li>
            <li>
                <label for="posisi">Gambar  :</label><br>
                <img src="img/<?=$p["gambar"];?>" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
            <br>
        </ul>
    </form>
    
</body>
</html>