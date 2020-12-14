<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 4 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?language=PHP&amp;server=LAMP">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php

            if (isset($_GET['language']) && isset($_GET['server'])) {
                // echo $_GET['language'] . ' ' . $_GET['server'];
                echo "Param1 = " . $_GET['language'] . '<br>';
                echo "Param2 = " . $_GET['server'];
            } else {
                echo "Param1 = " . '<br>';
                echo "Param2 = ";
            }
            ?>
        </p>

    </div>
    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?language=PHP&server=LAMP
</p> -->
</body>

</html>