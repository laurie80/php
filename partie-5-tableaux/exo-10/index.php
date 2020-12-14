<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 Partie 5 PHP</title>
</head>

<body>

    <?php

    $coordonnees = [
        80 => 'Somme', 
        02 => 'Aisne', 
        60 => 'Oise', 
        62 => 'Pas-de-Calais', 
        59 => 'Nord', 
        51 => 'Reims'];
    // ou
    // $coordonnees = array (80 => 'Somme', 02 => 'Aisne', 60 => 'Oise', 62 => 'Pas-de-Calais', 59 => 'Nord');
    foreach($coordonnees as $cle => $element)
{
    echo 'Le département ' . $element . ' à le numéro ' . $cle . '<br />';
}

    ?>

<!-- <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**</p> -->

</body>

</html>