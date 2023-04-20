<?php
    if (!isset($_POST["nama"])) {
        header("Location:post.php");
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>isi belajar post</title>
</head>

<body>
<h1>Selamat datang, <?=$_POST["nama"];?>!</h1>
<!-- nah bedanya post dengan get adalah get url nya masih keliatan sedangkan post tidak -->
</body>
</html>
