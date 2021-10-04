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
        # Boucle for
        for ($i=0; $i <= 20; $i++) { // i = 0, i = 1, i = 2
            if ($i % 2 == 0) {
                echo $i." ";
            }
        }
        echo "</br>";

        for ($i=0; $i <= 20; $i += 2) { // i = 0, i = 2
            echo $i." ";
        }
        echo "</br>";

    ?>
</body>
</html>