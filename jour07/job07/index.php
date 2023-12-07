<?php
$str = "";

function gras($str){
    $result = "";
    $mot = explode(" ", $str);
    foreach($mot as $m) {
        if(ctype_upper($m[0])) {
            $result .= "<b>".$m." </b>";
        }
        else {
            $result .= $m." ";
        }
    }
    echo $result;
}
/*---------------------------------------------------------------------------*/
function cesar($str, $decalage = 2) {
    $result = "";
    for($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if(ctype_alpha($char)) {
            $isUpper = ctype_upper($char);
            $char = chr((ord($char) - ($isUpper ? ord('A') : ord('a')) + $decalage) % 26 + ($isUpper ? ord('A') : ord('a')));
        }
        $result .= $char;
    }
    echo $result;
}
/*---------------------------------------------------------------------------*/
function plateforme($str){
    $result = "";
    $mot = explode(" ", $str);
    foreach($mot as $m) {
        if(substr($m, -2) == "me") {
            $result .= $m."_";
        }
        else {
            $result .= $m." ";
        }
    }
    echo $result;
}
/*---------------------------------------------------------------------------*/
function afficheStr($str) {
    $result = "";
    if(isset($_POST["envoyer"])) {
        $str = $_POST["str"];
        if($_POST["fonction"] == "gras") {
            gras($str);
        }
        if($_POST["fonction"] == "cesar") {
            cesar($str, 2);
        }
        if($_POST["fonction"] == "plateforme") {
            plateforme($str);
        }
    }
}
/*---------------------------------------------------------------------------*/
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

    <form action="index.php" method="post" style="text-align: center; margin-top: 30vh;">
        <label for="str">Texte : </label>
        <input type="text" id="str" name="str" size="80" /><br><br>
        <label for="fonction">Fonction : </label>
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>
        <input type="submit" name="envoyer" value="Envoyer" />
    </form>

    <p style="text-align: center;">
        <?php echo afficheStr($str); ?>
    </p>
</body>

</html>