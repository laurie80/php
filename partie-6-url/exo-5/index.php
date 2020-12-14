<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 5 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?week=12">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php
            if (isset($_GET['week'])) {
                echo "Param = " . $_GET['week'];
            } else {
                echo "Param = " . '<br>';
            }
            ?>
        </p>

    </div>

    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher:
    **index.php?week=12**
</p> -->
</body>

</html>