<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 3 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
                // echo $_GET['startDate'] . ' ' . $_GET['endDate'];
                echo "Param1 = " . $_GET['startDate'] . '<br>';
                echo "Param2 = " . $_GET['endDate'];
            } else {
                echo "Param1 = " . '<br>';
                echo "Param2 = ";
            }
            ?>
        </p>

    </div>

    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?startDate=2/05/2016&endDate=27/11/2016
</p> -->

</body>

</html>