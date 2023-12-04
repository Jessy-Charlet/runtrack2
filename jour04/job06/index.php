<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<form name="formulaire" method="get" action="index.php">
    Nombre : <input type="text" name="nombre"/> <br/>
    <input type="submit" name="Test" value="Tester"/>
</form>

<?php  

if (isset($_GET['Test'])) {
        if ($_GET["nombre"] %2){
            echo "Nombre impair";
        }
        else {
        echo "Nombre pair";
        }
    }
?>



</body>
</html>