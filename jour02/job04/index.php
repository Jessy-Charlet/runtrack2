<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<?php
$number = 0;
$multiple3 = 3;
$multiple5 = 5;
while ($number <= 100) {
    if ($number %  $multiple3 == 0 and $number % $multiple5 == 0 ) {
        echo "FizzBuzz<br>";
    }
    elseif ($number %  $multiple3 == 0) {
        echo "Fizz<br>";
    }
    elseif ($number %  $multiple5 == 0) {
        echo "Fizz<br>";
    }
else {
    echo $number."<br>";
}
$number ++;
}
?>
</body>
</html>