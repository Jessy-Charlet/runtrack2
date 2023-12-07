<?php

session_start();

$nbvisites = isset($_SESSION['nbvisites']) ? (int)$_SESSION['nbvisites'] : 0;

if(isset($_POST["reset"])) {
    $nbvisites = 0;
    session_reset();
}
$_SESSION['nbvisites'] ++;
echo "Nombre de visites : " .$nbvisites;
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<form method="post" action="index.php">
    <input type="submit" name="reset" value="Réinitialiser le compteur">
</form>

</body>

</html>

