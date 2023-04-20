<?php
    //memulai session
    session_start();
    
    //cek session dari halaman login
    if (!$_SESSION["login"]) {
        header("Location: login.php");
        exit;
    }
    
    require "koneksi.php";

    $id = $_GET["id"];

    if (hapus($id)>0) {
        echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href = 'looping2.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal dihapus');
        document.location.href = 'looping2.php';
        </script>
        ";
    }
?>