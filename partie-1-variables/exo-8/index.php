<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 PHP</title>
</head>
<body>
    <p>Créer 3 variables.  
- Dans la première mettre le résultat de l'opération **3 + 4**.  
- Dans la deuxième mettre le résultat de l'opération **5 * 20**.  
- Dans la troisième mettre le résultat de l'opération **45 / 5**.  

Afficher le contenu des variables.
    </p>

<?php
// $numberOne = 3;
// $numberTwo = 4;
$addition = 3+4;
// ou
$numberOne = 5;
$numberTwo = 20;
$multiplication = $numberOne*$numberTwo;

$numberOne = 45;
$numberTwo = 5;
$division = $numberOne/$numberTwo;

echo "$addition $multiplication $division";

?>

</body>
</html>