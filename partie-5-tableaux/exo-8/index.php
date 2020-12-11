<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 Partie 5 PHP</title>
</head>

<body>

    <?php

$months[1] = 'janvier';
$months[2] = 'février';
$months[3] = 'mars';
$months[4] = 'avril';
$months[5] = 'mai';
$months[6] = 'juin';
$months[7] = 'juillet';
$months[8] = 'aout';
$months[9] = 'septembre';
$months[10] = 'octobre';
$months[11] = 'novembre';
$months[12] = 'décembre';

echo $months[8] = 'août';

foreach($months as $element)
    {
        echo $element . '<br>';
    }

    ?>

<!-- <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p> -->

</body>

</html>