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
    $coordonnees = array (
        'prenom'    => 'François',
        'nom'       => 'Dupont', 
        'adresse'   => array (
            'numero' => '3',
            'nom' => 'rue du Paradis',
            'ville' => 'Paris'
        )
    );

    echo $coordonnees['prenom']."<br/>";

    print_r($coordonnees['adresse']['ville']);

    ?>
</body>
</html>