<!-- VERSION 2 -->

<?php
// $lastname = 'Param non présent';
// $firstname = 'Param non présent';

// if ((isset($_GET['lastname'])) && (isset($_GET['firstname']))) {
    // $lastname =  $_GET['lastname'];
    // $firstname =  $_GET['firstname'];
// }
?>

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

    <!-- version 2 correction

    <div class="container">
        <div class="d-flex justify-content-center">
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?lastname=Tutor&firstname=Janine" role="button">Envoi des paramètres</a>
            <a name="submitParam" id="submitParam" class="btn btn-secondary m-1" href="index.php" role="button">Retour INDEX</a>
        </div>
        <p class="text-center">Param1 :<?= $lastname ?></p>
        <p class="text-center">Param2 :<?= $firstname ?></p>
    </div> -->

    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
     **index.php?lastname=Nemare&firstname=Jean**
</p> -->


  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>