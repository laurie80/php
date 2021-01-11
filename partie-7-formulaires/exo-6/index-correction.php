<?php

if (empty($_GET)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = '/^[a-zA-Z]+$/';

if (isset($_GET['firstname'],$_GET['lastname'], $_GET['gender'])) {
    if (preg_match($regexName, $_GET['firstname'])) {
        $securedFirstName = htmlspecialchars($_GET['firstname']);
    } else {
        $securedFirstName = '';
    }

    if (preg_match($regexName, $_GET['lastname'])) {
        $securedLastName = htmlspecialchars($_GET['lastname']);
    } else {
        $securedFirstName = '<i>Mauvais format</i>';
    }

    if ($_GET['gender'] == 'Monsieur') {
        $gender = ($_GET['gender']);
        echo 'vous avez choisi l\'option Mrs';
    } else {
        $gender = ($_GET['gender']);
        echo 'vous avez choisi l\'option Mme';
    }
}
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 7 exo 6</title>
</head>

<body>
    <div class="container d-flex justify-content-center">

        <?php if ($showForm) {?>

        <h1> Formulaire d'inscription</h1>

        <form action="" method="GET">
            <div class=" mb-5">
                <SELECT name="gender" size="1">
                    <option value="Monsieur" selected>Mr</option>
                    <option value="Madame">Mme</option>
                </SELECT>
            </div>
            <div class=" mb-5">
                <label for="lastname">Quel est votre Nom ?</label>
                <input type="text" class="lastname" name="lastname">
            </div>
            <div class="mb-5">
                <label for="firstname">Quel est votre prénom ?</label>
                <input type="text" class="firstname" name="firstname"">
        </div>

        <button type=" submit" class="btn btn-primary">Valider</button>
        </form>
        <?php } else { ?>
        <p>Bonjour je m'appelle, <?= $gender . ' ' . $securedFirstName . ' ' . $securedLastName; ?>
        </p>
        <?php } ?>

    </div>
    <div class="Consigne text-center ">
        <p>
            Créer un formulaire sur la page **index.php** avec :
            - Une liste déroulante pour la civilité (Mr ou Mme)
            - Un champ texte pour le nom
            - Un champ texte pour le prénom
        </p>



</body>

</html>


