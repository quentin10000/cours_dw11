<?php
    function addition($a, $b) {
        return $a + $b;
    }

    function aire($longueur, $largeur) {
        return $longueur * $largeur;
    }

    function perimetre($longueur, $largeur) {
        return ($longueur + $largeur) * 2;
    }
?>


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
        echo "Addition de 5 + 9 : ".addition(5, 9)."<br/>";
        echo "Addition de 54545 + 4578657 : ".addition(54545, 4578657)."<br/>";
        echo "Affichage de la date du jour : ".date('D M Y')."<br/>";
        echo "Aire du rectangle (2; 4) : ".aire(2, 4)."<br/>";
        echo "Périmètre du rectangle (2; 4) : ".perimetre(2, 4)."<br/>";
    ?>
</body>
</html>