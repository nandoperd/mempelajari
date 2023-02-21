<!-- for -->
<?php
    for($i=0; $i <5; $i++){
        echo "letto <br>";
    }

?>

<!-- while -->
<?php
    $i=3;
    while($i <10){
        echo "broker <br>";
    $i++;
    }
?>

<!-- do while -->
<?php
$i=0;
    do {
        echo "gelap<br>";
        $i++;
    }while($i<3);
?>

<html>
    <head>
        <style>
            .ijo {
                background-color: green;
            }
            .red {
                background-color: red;
            }
        </style>
    </head>
    <body>
    <table border="1" cellpadding="10" cellspacing="0" >
        <?php for ($i=1; $i<=5; $i++) : ?>
        <?php if($i % 2 == 1) :?>
            <tr class="ijo">
        <?php else : ?>
        <tr class="red">
        <?php endif; ?>
            <?php for($j=1; $j<3; $j++):?>
            <td><?="$i, $j"?></td>
            <?php endfor;?>
        </tr>
        <?php endfor ; ?>
    </table> 
    </body>
</html>
