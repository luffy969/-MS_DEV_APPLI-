<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{text-align: center;}
    </style>
    <title>Document</title>
</head>

<body>
    <?php

    ksort($departements);
    foreach ($departements as $region => $departement) {
        echo $region . '<br>';
    }
    ?>
  <br>
    <?php
    foreach ($departements as $region => $departement) {
        echo $region . " " .(count($departement)) . '<br>';
    }
    ?>
</body>

</html>