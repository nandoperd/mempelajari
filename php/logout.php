<?php
    //membuka session
    session_start();

    //$_SESSION kosong dan unset pada dasarnya sama dengan destroy, untuk lebih meyakinkan sesi keluar
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: login.php");
    exit;
?>