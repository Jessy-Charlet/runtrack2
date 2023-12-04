<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<form name="formulaire" method="post" action="index.php">
    Identifiant : <input type="text" name="username"/> <br/>
    Mot de passe : <input type="password" name="password"/> <br/>
    <input type="submit" name="Connexion" value="Connexion"/>
</form>

<?php  
$n = 0;

if (isset($_POST['Connexion'])) {
        if ($_POST["username"] == "John" AND
        $_POST["password"] == "Rambo"){
            echo "<h1 style='color: red;'>C’est pas ma guerre !</h1>";
        }
        else {
        echo "<h1>Votre pire cauchemar</h1>";
        }
    }
?>



</body>
</html>