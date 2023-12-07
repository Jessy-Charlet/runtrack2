<?php
function leetSpeak($str) {
    $french = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p",
    "q","r","s","t","u","v","w","x","y","z"];
    $leet = ["4","8","(","[)","3","|=","6","#","1","_|","X","1","|v|","^/","0","|*",
    "(_,)","2","5","7","(_)","\/","\/\/","><","7","≥"];
    $str = str_ireplace($french, $leet, $str);
    return $str;
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

    <?php
    $str = "Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre toujours.";
    echo "Phrase de base en Français:<br>";
    echo $str . "<br><br>";
    echo "Transcription en LeetSpeak :<br>";
    echo leetSpeak($str) ;
    ?>

</body>

</html>