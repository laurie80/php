<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 Partie 3 PHP</title>
</head>

<body>

    <?php

    $up = 200;

    for ($up = 200; $up >= 0; $up -= 12) {
        echo $up . '<br>';
    }
    echo "Enfin !!!!" . '<br>';
    ?>

    <!-- <p>En allant** de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!</p> -->

</body>

</html>