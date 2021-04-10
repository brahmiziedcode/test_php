<?php
$str = "cdcdcdcdeeeef";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <title>Document</title>
</head>
<table class="table">
    <tr>
        <td>Lettre</td>
        <td>Nombre</td>
    </tr>
    <?php foreach (count_chars($str, 1) as $strr => $value) { ?>
        <tr>
            <td><?= chr($strr) ?> </td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>

</table>

<body>

</body>

</html>