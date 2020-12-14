<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 6 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?building=12&amp;room=101">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php
            if (isset($_GET['building']) && isset($_GET['room'])) {
                // echo $_GET['building'] . ' ' . $_GET['room'];
                echo "Param1 = " . $_GET['building'] . '<br>';
                echo "Param2 = " . $_GET['room'];
            } else {
                echo "Param1 = " . '<br>';
                echo "Param2 = ";
            }
            ?>
        </p>

    </div>
    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?building=12&room=101**
</p> -->
</body>

</html>