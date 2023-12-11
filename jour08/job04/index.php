<?php
if (empty($_COOKIE['connexion'])){
    echo "<form method='get' action='index.php'>
    <input type='text' name='prenom' placeholder='Prénom'><br>
    <button type='submit' name='connexion'>Connexion</button>
    </form>";
    if (isset($_GET['connexion'])){
        $prenom = $_GET['prenom'];
        setcookie('connexion', $prenom);
        header("Location: ./index.php");
    }
}
else {
    $prenom = $_COOKIE['connexion'];
    echo "<p>Bonjour " .$prenom. " !</p>";
    echo "<form method='get' action='index.php'>
    <button type='submit' name='deco'>Déconexion</button>
    </form>";
    if (isset($_GET['deco'])){
        setcookie('connexion');
        header("Location: ./index.php");
    }
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

</body>

</html>

