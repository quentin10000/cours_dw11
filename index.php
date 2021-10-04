<?php
$exemples = array('exemple1.php', 'exemple2.php', 'exemple3.php', 'exemple4.php', 'exemple5.php', 'exemple6.php');
$exos = array('exo1.php', 'exo2.php', 'exo3.php', 'exo4.php', 'exo5.php', 'exo6.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Le meilleur cours de ma vie :)</title>
</head>
<body>
    <h1>Sommaire</h1>
    <div>
        <h2>Exemples :</h2>
        <ul>
        <?php foreach ($exemples as $value): ?>
            <li><a href='exemple/<?= $value ?>'><?= $value ?></a></li>
        <?php endforeach ?>
        </ul>
        <h2>Exos :</h2>
        <ul>
        <?php foreach ($exos as $value): ?>
            <li><a href='exo/<?= $value ?>'><?= $value ?></a></li>
        <?php endforeach ?>
        </ul>
    </div>
</body>
</html>