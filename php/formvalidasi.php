<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
    <style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }
    span {
        color: #FF0000;
    }
    label {
        display: block;
    }
    </style>
</head>
<body>
    <h1 class="judul">Form Validasi</h1>

    <?php
        //membuat variabel inputan dengan value kosong
        $nama = $email = $website = "" ;
        //membuat varabel inputan jika kosong
        $namaKos = $emailKos = $websiteKos = "" ;

        // membuat kondisi menggunakan global server dan memasukkannya ke dalam fungsi cek
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //membuat kondisi jika input kosong
            if (empty($_POST["nama"])) {
                $namaKos = "Nama harus diisi!";
            } else {
                $nama = cek($_POST["nama"]);
                //cek nama dari karakter selain huruf dan spasi
                if (!preg_match("/^[a-zA-Z-' ]*$/", $nama)) {
                    $namaKos = "Nama jangan aneh-aneh lah!";
                }
            }

            if (empty($_POST["email"])) {
                $emailKos = "Email harus diisi!";
            } else {
                $email = cek($_POST["email"]);
                //cek apakah email valid menggunakan filter validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailKos = "Email tidak sah!";
                }

            }

            if (empty($_POST["website"])) {
                $websiteKos = "Website harus diisi!";
            } else {
                $website = cek($_POST["website"]);
                //cek apakah website valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteKos = "Website tidak sah!";
                }
            }
        }

        function cek($data){
            // menggunakan trim untuk menghapus spasi atau karakter whitespace lainnya dari awal dan akhir sebuah string
            $data = trim($data);
            // menggunakan stripslashes untuk menghapus karakter (\)
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h3>Silahkan diisi : </h3>

    <!-- membuat aksi dengan spesial chars dan global server -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <label for="nama" id="nama">Nama :</label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> <span><?php echo $namaKos; ?></span>
    <label for="email" id="email">Email :</label>
    <input type="email" name="email" id="cub" value="<?php echo $email; ?>"> <span><?php echo $emailKos; ?></span>
    <label for="website" id="website">Website :</label>
    <input type="text" name="website" id="website" value="<?php echo $website; ?>"> <span><?php echo $websiteKos; ?></span>
    <br><br>
    <button type="submit" name="submit" value="submit">Kirim</button>
    </form>
    
    <h3>Hasil :</h3>
    <?php
        echo "Nama &nbsp;&nbsp;&nbsp;: " . $nama . "<br>";
        echo "Email &nbsp;&nbsp;&nbsp;: " . $email . "<br>";
        echo "Website : " . $website . "<br>";
    ?>
    
</body>
</html>