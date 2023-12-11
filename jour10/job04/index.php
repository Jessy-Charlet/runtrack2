


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<?php
// connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "jour09";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Requête SQL 
$sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE prenom LIKE 'T%'";

// Exécution de la requête
$resultat = $connexion->query($sql);

// Affichage du tableau HTML
echo "<table border='1' cellpadding='15' rules='rows'>";
echo "<thead><tr>";
while ($champ = $resultat->fetch_field()) {
    echo "<th>{$champ->name}</th>";
}
echo "</tr></thead>";
echo "<tbody>";
while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    foreach ($ligne as $valeur) {
    echo "<td>$valeur</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Libérer le résultat de la mémoire
$resultat->free();

// Fermeture de la connexion à la base de données
$connexion->close();
?>
</body>
</html>