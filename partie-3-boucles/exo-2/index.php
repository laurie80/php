<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 3 PHP</title>
</head>
<body>

<!-- <p>
Avec WHILE, Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
**Tant que** la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable
</p> -->

<?php

$numberOne = 0;
$numberTwo = 10;

while ($numberOne < 20) {
    $numberOne*$numberTwo;
    echo $numberOne.'<br>';
    $numberOne++;
}

?>
    
</body>
</html>