<?php
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
);
$arraySize = count($pays_population);

function sumCountries($array) {
    $arrayFiltred = array_filter($array, function($key) {
        return $key >= 20000000;
    });
    $total = array_sum($arrayFiltred);
    return $total;
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
    <h1>Population des pays</h1>
    <table>
        <tr>
            <th>Pays</th>
            <th>Population</th>
        </tr>
        <?php foreach($pays_population as $key => $value): ?>
            <?php if($value >= 20000000): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
        <tr>
            <td>Total</td>
            <td><?= sumCountries($pays_population) ?></td>
        </tr>
    </table>
</body>
</html>