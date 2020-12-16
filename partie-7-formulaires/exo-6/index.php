<?php

$regexName = "/^[a-zA-Z]+$/";

if (isset($_GET["civility"]) && isset($_GET["firstName"]) && isset($_GET["lastName"])) {
    if (preg_match($regexName, $_GET["civility"])) {
        $securedCivility = htmlspecialchars($_GET["civility"]);
    } else {
        $securedCivility = "<i>Mauvais format</i>";
    }

    if (preg_match($regexName, $_GET["firstName"])) {
        $securedFirstName = htmlspecialchars($_GET["firstName"]);
    } else {
        $securedFirstName = "<i>Mauvais format</i>";
    }

    if (preg_match($regexName, $_GET["lastName"])) {
        $securedLastName = htmlspecialchars($_GET["lastName"]);
    } else {
        $securedLastName = "<i>Mauvais format</i>";
    }

    echo $securedCivility . "<br>";
    echo $securedFirstName . "<br>";
    echo $securedLastName . "<br>";

} else {
    echo '<form action="index.php" method="get">
    <div>
        <select name="civility">
            <option>Mr
            <option>Mme
        </select>
    </div>
    <div>
        <label for="firstName">Nom :</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="lastName">Prénom :</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <!-- <button type="button" class="btn btn-secondary"><a class="text-white" href="user.php">Envoyer</a></button> -->
        <input type="submit" value="Envoyer">
    </div>
</form>';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 6 partie 7 Les Formulaires</title>
</head>


<body>

        <!-- <p>
    Avec le formulaire de l'exercice 5, 
    Si des données sont passées en **POST** ou en **GET**, 
    le formulaire ne doit pas être affiché. 
    Par contre les données transmises doivent l'être. 
    Dans le cas contraire, c'est l'inverse.  
    Utiliser qu'une seule page. 
    </p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>