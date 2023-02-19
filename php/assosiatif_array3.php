<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pemain= [
        ["nama" => "broker",
        "club" => "AC Milan",
        "posisi" => "CF",
        "img" => "nando.jpeg"
        ],

    ["nama" => "ee",
    "club" => "Inter",
    "posisi" => "GK",
    "img" => "ariel.jpeg"
    ]
    ];
    echo $pemain[1]["nama"];
?>

<?php foreach($pemain as $he): ?>
    <ul>
        <li><?= $he["nama"]; ?></li>
        <li><?= $he["club"]; ?></li>
        <li><?= $he["posisi"]; ?></li>
        <li>
            <img width=50%; src="img/<?= $he["img"]; ?>" alt="jersey"></li>
    </ul>
<?php endforeach; ?>


</body>
</html>
