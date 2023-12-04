<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<form name="formulaire" method="get" action="index.php">
    Prénom : <input type="text" name="prenom"/> <br/>
    Nom : <input type="text" name="nom"/> <br/>
    Age : <input type="text" name="age"/> <br/>
    <input type="submit" name="valider" value="OK"/>
</form>

<table cellspacing="0">
    <tr>
        <th style="font-weight: 900; border: 1px solid black; padding: 0.5em;">
            Argument
        </th>
        <th style="font-weight: 900; border: 1px solid black; padding: 0.5em;">
            Valeur
        </th>
    </tr>
<?php  
$n = 0;

if (isset($_GET['valider'])) {
    foreach ($_GET as $index => $valeur) {
        if ($index == "valider"){

        }
        else {
            echo '<tr><td style="border: 1px solid black; padding: 0.5em;">' . $index . '</td>
            <td style="border: 1px solid black; padding: 0.5em;">' . $valeur . '</td></tr>';
        }
    }
}
?>
</table>



</body>
</html>