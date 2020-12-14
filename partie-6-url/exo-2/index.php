<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 2 Partie 6 PHP</title>
</head>

<body>
    <div class="text-center">

        <button type="button" class="btn btn-primary"><a class="text-white" href="index.php?lastname=Nemare&amp;firstname=Jean">Envoi des paramètres</a></button>
        <button type="button" class="btn btn-secondary"><a class="text-white" href="index.php">Retour INDEX</a></button>

        <p>
            <?php
            if (isset($_GET['age'])) {
                echo "Param = " .$_GET['age'] . '<br>';
            } else {
                echo 'Le paramètre n\'est pas présent !';
            }
            ?>
        </p>

    </div>

    <!-- <p>Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : 
    **index.php?lastname=Nemare&firstname=Jean**</p> -->

</body>

</html>