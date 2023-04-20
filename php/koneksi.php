<?php
    //membuat halaman fungsi koneksi
    $conn = mysqli_connect("localhost", "root", "", "belajar");

    //membuat function wadah query
    function query($query) {
      //membuat $conn di atas menjadi global
      global $conn;

      //fungsi koneksi dan query
      $result = mysqli_query($conn, $query);

      //membuat wadah row
      $rows = [];

      //membuat looping fetch pada pemanggilan fungsi koneksi dan query
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      
      //mengembalikan data rows (yang sudah diisi)
      return $rows;
    }

    //membuat fungsi tambah
    function tambah($data) {
      global $conn;

      //htmlspecialchars di bawah berguna untuk melindungi input dari hack
      $nama = htmlspecialchars($data["nama"]);
      $club = htmlspecialchars($data["club"]);
      $posisi = htmlspecialchars($data["posisi"]);
      
      //upload gambar
      //memanggil data gambar menggunakan fungsi upload
      $gambar = upload();

      //membuat kondisi apakah ada gambar yg diupload
      if (!$gambar) {
        return false; //false berarti code selanjutnya tidak dijalankan
      }
    

    $query = "INSERT INTO bola VALUES ('','$nama','$club','$posisi', '$gambar')";

    mysqli_query($conn, $query);

    //fungsi mengembalikan data berhasil dikirim
    return mysqli_affected_rows($conn);

  }

  function upload(){
    //mengambil data yang dikirim dari form ke dalam variabel
    //ambil data nama file
    $namaFile = $_FILES['gambar']['name'];
    //ambil data ukuran file
    $ukuranFile = $_FILES['gambar']['size'];
    //ambil data error
    $error = $_FILES['gambar']['error'];
    //ambil data untuk penyimpanan sementara
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah gambar diupload apa tidak
    //error 4 pada php berarti error gambar tidak diupload
    if ($error === 4) {
      echo "<script>
        alert('Pilih gambar terlebih dahulu!');
        </script>
      ";
      return false; //mematikan code selanjutnya jika error
    }

    //cek ekstensi file
    //membuat rule file apa yang boleh diupload
    $gambarValid = ['jpg', 'jpeg', 'png'];
    //memecah nama file menggunakan explode untuk identifikasi tipe file
    $ekstensiGambar = explode('.',$namaFile);
    //mengambil nama file ekstensi gambar ke bagian paling akhir dan merubah huruf menjadi kecil agar sesuai dengan rule
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    //cek apakah ekstensi file gambar valid menggunakan fungsi in_array untuk memecah string di dalam array
    if (!in_array($ekstensiGambar, $gambarValid)) {
      echo "<script>
      alert('Gambar yang diupload tidak sesuai!');
      </script>
    ";
    return false; //mematikan code selanjutnya jika error
    }

    //cek ukuran file
    //angka di bawah adalah ukuran byte
    if ($ukuranFile > 1000000) {
      echo "<script>
      alert('Ukuran gambar terlalu besar!');
      </script>
    ";
    return false; //mematikan code selanjutnya jika error
    }

    //upload file gambar setelah lolos validasi dengan move_uploaded_file
    //generate nama file baru dengan uniqid
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    //mengembalikan nama gambar untuk diupload
    return $namaFileBaru;

  }

  function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM bola WHERE id=$id");
    return mysqli_affected_rows($conn);
  }

  function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $club = htmlspecialchars($data["club"]);
    $posisi = htmlspecialchars($data["posisi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user upload gambar baru apa tidak
    if ($_FILES['gambar']['error']===4) {
      $gambar = $gambarLama;
    } else {
      $gambar = upload();
    }
    
    $query = "UPDATE bola SET
            nama = '$nama',
            club = '$club',
            posisi = '$posisi',
            gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    //fungsi mengembalikan data berhasil dikirim
    return mysqli_affected_rows($conn);
  }

  //membuat fungsi cari
  function cari($keyword){
    $query = "SELECT * FROM bola
              -- WHERE nama = '$keyword' kondisi menyebabkan data harus sesuai dengan keyword
              -- kondisi menggunakan LIKE dan % berarti spasi antara kata sebelum dan sesudah keyword
              -- tambahkan OR untuk mencari banyak data sesuai keyword
              WHERE nama LIKE '%$keyword%' OR
                    club LIKE '%$keyword%' OR
                    posisi LIKE '%$keyword%'
            ";

    // mengembalikan fungsi query pada fungsi query di atas
    return query($query);
  }

  //membuat fungsi registrasi
  function registrasi($data){
    global $conn;

    //mengambil data dari form registrasi
    //stripslashes adalah fungsi untuk membersihkan karakter selain huruf
    $username = strtolower(stripslashes($data["username"]));
    //mysqli_real_escape_string untuk 
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username tersedia atau tidak
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
      echo "<script>
        alert('Username sudah terdaftar!');
        </script>
      ";
      return false;
    }

    //cek konfirmasi password dengan password2
    if ($password != $password2) {
      echo "<script>
        alert('Konfirmasi password tidak sesuai!');
        </script>
      ";
      return false;
    }

    //enkripsi password
    //info : md5 sudah mudah dilacak lewat google, jadi pakai hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert data user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);

  }

?>