<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 1 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?lastname=Nemare&amp;firstname=Jean">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php
            // var_dump($_GET);
            if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
                echo "Param1 = " . $_GET['lastname'] . '<br>';
                echo "Param2 = " . $_GET['firstname'];
            } else {
                echo "Param1 = " . '<br>';
                echo "Param2 = ";
            }
            ?>
        </p>

    </div>

    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
     **index.php?lastname=Nemare&firstname=Jean**
</p> -->

</body>

</html>