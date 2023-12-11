<?php
session_start();

if (isset($_POST["new"])){
    unset($_SESSION['nom1']);
    unset($_SESSION['nom2']);
    unset($_SESSION['grid']);
    unset($_SESSION['tour']);
    header('location: ./index.php');
}

if (isset($_SESSION['nom1'], $_SESSION['nom2'], $_SESSION['grid'], $_SESSION['tour'])) {
    $affichage = 'jeu';
    function vainqueur()
{
    $grid = $_SESSION['grid'];
    // lignes et colonnes :
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] == $grid[$i][1] && $grid[$i][1] == $grid[$i][2] && $grid[$i][0] != 0)
            return $grid[$i][0];
        if ($grid[0][$i] == $grid[1][$i] && $grid[1][$i] == $grid[2][$i] && $grid[0][$i] != 0)
            return $grid[0][$i];
    }

    //  diagonales : 
    if ($grid[0][0] == $grid[1][1] && $grid[1][1] == $grid[2][2] && $grid[1][1] != 0)
        return $grid[1][1];
    if ($grid[0][2] == $grid[1][1] && $grid[1][1] == $grid[2][0] && $grid[1][1] != 0)
        return $grid[1][1];

    // match nul 
    $nb0 = 0;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($grid[$i][$j] == 0)
                $nb0++;
        }
    }

    if (!$nb0)
        return -1;

    return 0;
}
$winner = vainqueur();
if ($winner != 0) {
    $affichage = 'resultats';
} else {

};

    if (isset($_GET['ligne'], $_GET['colonne'])) {
        $l = $_GET['ligne'];
        $c = $_GET['colonne'];

        if ($_SESSION['grid'][$l][$c] != 0)
            exit;

        $_SESSION['grid'][$l][$c] = $_SESSION['tour'];

        $_SESSION['tour'] = ($_SESSION['tour'] == 1) ? 2 : 1;
        header('location: ./index.php');
        exit;
    }

} else {
    if (isset($_POST['nom1'], $_POST['nom2'])) {
        $_SESSION['nom1'] = $_POST['nom1'];
        $_SESSION['nom2'] = $_POST['nom2'];
        $_SESSION['tour'] = mt_rand(1, 2);
        $_SESSION['grid'] = [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]
        ];
        header('location: ./index.php');
        exit;
    } else {
        $affichage = 'accueil';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Morpion</h1>
    <?php

    switch ($affichage) {
        case 'resultats':
            if ($winner > 0) {
                echo '<h1>Victoire de ' . htmlspecialchars($_SESSION['nom' . $winner]) . ' ! </h1>';
                    ?>
                    <form method="post">
                <button type="submit" name="new" value="Recommencer">Rejouer</button>
            </form>
            <?php
            } else {
                echo '<h2>Match nul...</h2>';
                ?>
                <form method="post">
            <button type="submit" name="new" value="Recommencer">Rejouer</button>
        </form>
        <?php
            }
            break;
        case 'jeu':
            echo '<h2>C\'est au tour de ' . htmlspecialchars($_SESSION['nom' . $_SESSION['tour']]) . '</h2>';
            ?>
            <table>
                <?php
                for ($ligne = 0; $ligne < 3; $ligne++) {
                    echo '<tr>';
                    for ($colonne = 0; $colonne < 3; $colonne++) {
                        if ($_SESSION['grid'][$ligne][$colonne] == 0)
                            echo '<td><a href="?ligne=' . $ligne . '&colonne=' . $colonne . '"></a></td>';
                        elseif ($_SESSION['grid'][$ligne][$colonne] == 1)
                            echo '<td><img src="croix.png"></td>';
                        else
                            echo '<td><img src="cercle.png"></td>';
                    }
                    echo '</tr>';
                }
                ?>
            </table>
            <?php
            break;
        case 'accueil':
            ?>
            <form method="post">
                <label>Joueur 1 : <input type="text" name="nom1" placeholder="Bob"> </label>
                <label>Joueur 2 : <input type="text" name="nom2" placeholder="Roger"> </label>
                <button type="submit" value="Commencer">Jouer</button>
            </form>
            <?php
            break;
        default:
            ?>
            <h1>Erreur</h1>
        <?php
    }

    ?>
</body>

</html>