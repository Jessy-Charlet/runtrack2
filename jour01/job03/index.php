<?php
 $bool = true ;
 $int = 14 ;
 $char = "Cassie";
 $flo = 4.12;
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<table>
    <tr>
        <th>
            Type
        </th>
        <th>
            Nom
        </th>
        <th>
            Valeur
        </th>
    </tr>
    <tr>
        <td>
             <?= gettype($bool);?>
        </td>
        <td>
            bool
        </td>
        <td>
            <?= $bool ?>
        </td>
    </tr>
    <tr>
        <td>
            <?= gettype($int);?>
        </td>
        <td>
            int
        </td>
        <td>
            <?= $int ?>
        </td>
    </tr>
    <td>
            <?= gettype($char);?>
        </td>
        <td>
            char
        </td>
        <td>
            <?= $char ?>
        </td>
    </tr>
    <td>
    <?= gettype($flo);?>
        </td>
        <td>
            flo
        </td>
        <td>
            <?= $flo ?>
        </td>
    </tr>
</table>
</body>
</html>