<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Département 77</h1>
    <select name="departement" placeholder="Dep">
        <option value="default" hidden disabled selected>Menu</option>
        <?php
            $dep = 77000;
            while ($dep < 78000) {
                echo "<option value='{$dep}'>{$dep}</option>";
                $dep++;
            }
        ?>
    </select>
</body>
</html>