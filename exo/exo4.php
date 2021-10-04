<?php
    $panier = [
        'bananes' => 1.20,
        'riz' => 0.50,
        'pepsi' => 2.50,
        'kinder_bueno' => 1.90
    ];
    $total = array_sum(array_values($panier))
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
    <h1>C'est mon panier</h1>
    <p style='font-size: .5em'>J'aime la bouffe !!!<p>
    <table>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
        </tr>
        <?php foreach($panier as $key => $value): ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?> €</td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td>Total</td>
            <td><?= $total ?> €</td>
        </tr>
    </table>
</body>
</html>
