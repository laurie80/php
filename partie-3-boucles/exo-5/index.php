<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 3 PHP</title>
</head>

<body>

<!-- <p>Avec une boucle FOR, En allant** de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque.</p> -->

<?php

$up = 1; 

for ($up = 1; $up <= 15; $up++) {
    echo $up.'<br>';
    echo "On y arrive presque".'<br>';
}
?>
    
</body>
</html>