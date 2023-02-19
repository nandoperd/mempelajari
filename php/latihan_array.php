<html>
    <head>
        <style>
            label {
                border : 1px solid red; 
                padding : 3px;
            }
            li {
                list-style-type: square;
                padding : 1px;
                margin-top : 2px;
            }
        </style>
    </head>
<?php
$player = [
    [
        "name" => "Maldini",
        "position" => "LB",
        "nationality" => "Italy"  
    ],
    [
        "name" => "Seedorf",
        "position" => "CMF",
        "nationality" => "Netherland"    
    ],
    [
        "name" => "Inzaghi",
        "position" => "CF",
        "nationality" => "Italy"   
    ]
    ];
?>

<?php foreach ($player as $p): ?>
    <ul>
        <label for="player">PLAYERS</label>
        <li>Name : <?= $p["name"];?></li>
        <li>Position : <?= $p["position"];?></li>
        <li>Nationality : <?= $p["nationality"];?></li>
    </ul>
<?php endforeach; ?>
</html>