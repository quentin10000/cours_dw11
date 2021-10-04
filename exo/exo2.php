<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 2 : les boucles</h1>
    <p>J'ai vraiment adoré cet exercice !!</p>
    <ul>
        <?php
        // EXO : Exercice 2 – 2 façons différentes de faire

        

        // Création de variable
        $bienvenue = 25;
        
        if ($bienvenue < 1) { // Condition (gestion des erreurs) pour vérifier le chiffre est inférieur 1
            echo "<li>Le nombre trop petit </li>";
        }elseif($bienvenue > 50 ) { // Condition (gestion des erreurs) pour vérifier le chiffre supérieur 50
            echo "<li>Le nombre trop grand </li>";
        }else{ // Condition alors tout se passe bien
            for ($i=0; $i < $bienvenue; $i++) { 
                echo "<li>".$i." - Bienvenue à toi</li>"; // On affiche le résultat
            }
        }
        ?>
    </ul>
</body>
</html>