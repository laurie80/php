<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 Partie 5 PHP</title>
</head>

<body>

    <?php

    $coordonnees = [80 => 'Somme', 02 => 'Aisne', 60 => 'Oise', 62 => 'Pas-de-Calais', 59 => 'Nord', 51 => 'Reims'];
    // ou
    // $coordonnees = array (80 => 'Somme', 02 => 'Aisne', 60 => 'Oise', 62 => 'Pas-de-Calais', 59 => 'Nord');
    foreach($coordonnees as $element)
    {
        echo $element . '<br>';
    }

    ?>

<!-- <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p> -->

</body>

</html>