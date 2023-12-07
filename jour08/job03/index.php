<?php
session_start();
$_SESSION[] = "prenom";

if (isset($_POST["prenom"])){
    $_SESSION["prenom"][] = $_POST("prenom");

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
    <label for="prenom"></label>
    <input type="text" name="prenom" placeholder="Prénom"><br>
    <input type="checkbox" id="reset" name="reset" value="reset" />
    <label for="reset">Vider la liste.</label><br>
    <input type="submit" name="valider" value="Valider">
</form>

<?php
echo $_SESSION["prenom"];
?>
</body>

</html>

