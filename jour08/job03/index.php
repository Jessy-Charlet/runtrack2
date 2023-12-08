<?php

session_start();

$prenoms = $_SESSION["nom"] ?? [];

if($_SERVER['REQUEST_METHOD'] === 'GET' and $_GET['nom'] != null){
    if(isset($_GET['nom'])) {
        $prenoms[] = $_GET['nom'];
        $_SESSION['nom'] = $prenoms;
    }
}
if($_SERVER['REQUEST_METHOD'] === 'GET' and $_GET['nom'] == null){
    echo "<p style='color: red; font-weight: 900;'>Merci d'inscrire un prénom.</p>";
}
if(isset($_GET['reset'])) {
    $_SESSION['nom'] = [];
    $prenoms= [];
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

<form method="get" action="index.php">
    <label for="prenom"></label>
    <input type="text" name="nom" placeholder="Prénom"><br>
    <input type="submit" name="valider" value="Valider">
    <input type="submit" name="reset" value="Reset">
</form>

<?php
    foreach($prenoms as $prenom) {
        echo "<li>$prenom</li>";
    }
?>
</body>

</html>

