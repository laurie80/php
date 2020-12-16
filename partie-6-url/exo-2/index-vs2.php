<?php
if (isset($_GET['lastname'])) {
    $lastname =  $_GET['lastname'];
} else {
    $lastname = 'Le param n\'est pas présent';
}

if (isset($_GET['firstname'])) {
    $firstname =  $_GET['firstname'];
} else {
    $firstname = 'Le param n\'est pas présent';
}

if (isset($_GET['age'])) {
    $age =  $_GET['age'];
} else {
    $age = 'Le param n\'est pas présent';
}
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie 6 - Exercice 2 version 2</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?lastname=Shima&firstname=Brian" role="button">Envoi des paramètres</a>
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?lastname=Shima&firstname=Brian&age=33" role="button">Envoi des paramètres + age</a>
            <a name="submitParam" id="submitParam" class="btn btn-secondary m-1" href="index.php" role="button">Retour INDEX</a>
        </div>
        <?php if (count($_GET) > 0) { ?>
            <p class="text-center"><b>Nom : </b> <?= $lastname ?></p>
            <p class="text-center"><b>Prénom : </b><?= $firstname ?></p>
            <p class="text-center"><b>Age : </b><?= $age ?></p>
        <?php } ?>
        
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