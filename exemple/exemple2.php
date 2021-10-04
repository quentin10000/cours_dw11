<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle : while</h1>
    <?php
        # Créer un variable
        $num_boucle = 0;

        # Boucle while
        while($num_boucle < 10) {
            echo 'repetition </br>';
            # $num_boucle = $num_boucle + 1;
            $num_boucle++; # Plus 'opti'
        }
    ?>
</body>
</html>