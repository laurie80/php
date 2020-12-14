<?php
var_dump($_GET);
if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    echo $_GET['lastname'] . ' ' . $_GET['firstname'];
} 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Partie 6 PHP</title>
</head>

<body>

    <button><a href="index.php?lastname=Nemare&amp;firstname=Jean">Envoi des paramètres</a></button>
    <button><a href="index.php">Retour INDEX</a></button>



    <!-- <p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
     **index.php?lastname=Nemare&firstname=Jean**
</p> -->

</body>

</html>