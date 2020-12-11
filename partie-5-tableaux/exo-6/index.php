<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 5 PHP</title>
</head>

<body>

    <?php
    //  $coordonnees[80] = 'Somme';
    //  $coordonnees[02] = 'Aisne';
    //  $coordonnees[60] = 'Oise';
    //  $coordonnees[62] = 'Pas-de-Calais';
    //  $coordonnees[59] = 'Nord';

    // echo $coordonnees[59];

    $coordonnees = [80 => 'Somme', 02 => 'Aisne', 60 => 'Oise', 62 => 'Pas-de-Calais', 59 => 'Nord'];
    // ou
    // $coordonnees = array (80 => 'Somme', 02 => 'Aisne', 60 => 'Oise', 62 => 'Pas-de-Calais', 59 => 'Nord');

    echo $coordonnees[59];

    //  $coordonnees = array (
    //     80 => 'Somme',
    //     02 => 'Aisne',
    //     60 => 'Oise',
    //     62 => 'Pas-de-Calais';
    //     59 => 'Nord');
    ?>

<!-- <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59</p> -->

</body>

</html>