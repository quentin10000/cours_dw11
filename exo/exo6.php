<?php
$repertoire = [
    'David' => 'david@yahoo.fr',
    'Sofiane' => 'sof@gmail.com',
    'Sarra' => 'sarraagmail.com',
    'Yacine' => 'yac@hotmail.fr',
    'Tristan' => 'tristan0gmail.com',
    'Vide' => ''
];

function checkMail($mail){
    return strpos($mail, '@') > 0;
}

function cleanRepertoire($rep) {
    foreach($rep as $prenom => $mail){
        if(!checkMail($mail) || empty($mail)){
            unset($rep[$prenom]);
        }
    }
    return $rep;
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
    <h1>Vérification e-mail</h1>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Valide</th>
        </tr>
        <?php foreach(cleanRepertoire($repertoire) as $prenom => $mail): ?>
            <tr>
                <td><?= $prenom ?></td>
                <td><?= $mail ?></td>
                <td><?= checkMail($mail) ? 'Oui' : 'Non' ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>