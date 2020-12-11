<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 3 PHP</title>
</head>
<body>

<!-- <p>
Avec WHILE, Créer une variable et l'initialiser à 1.  
**Tant que** cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur
</p> -->

<?php

$number = 1;

while ($number < 10) {
    echo $number.'<br>';
    $number += 0.5;
}

?>
    
</body>
</html>