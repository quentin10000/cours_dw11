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
        // Tableaux
        $prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît'); // Tableau a type unique (string)
        $ages = array(4, '42', 78.5, 25); // Tableau a type multiple
        
        // Afficher un tableau
        // echo $prenoms; NON! => Erreur
        print_r($prenoms); // Oui
        var_dump($ages); // Donne plus d'infos sur la variable

        echo "<br />";

        print "Taille du tableau : ".count($prenoms); // Compte un tableau : 5 ici

        echo "<br />";

        // Parcours les éléments d'un tableau
        for ($i=0; $i < count($prenoms); $i++) { 
            echo $prenoms[$i]." ";
        }

        echo "<br />";

        // Récupérer un index précis du tableau
        echo $prenoms[3]
    ?>
</body>
</html>