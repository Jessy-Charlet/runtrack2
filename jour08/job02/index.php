<?php

setcookie( 'cookie1', 0, time() +3000,);
$nbvisites = $_COOKIE['cookie1'];


$_COOKIE['cookie1'] ++;
echo "Nombre de visites : " .$nbvisites;

if(isset($_POST["reset"])) {
    $nbvisites = 0;
    setcookie('cookie1', time()-3000);
}
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

