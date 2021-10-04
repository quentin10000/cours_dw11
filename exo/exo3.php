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

        $notes = array(12, 18, 6, 15, 7, 3, 16); // notes sur 20
        $moyenne = 0;

        foreach($notes as $value) {
            $moyenne += $value;
        }

        $moyenne /= count($notes);
        
        echo "La moyenne du tableau est : {$moyenne}";

    ?>
</body>
</html>