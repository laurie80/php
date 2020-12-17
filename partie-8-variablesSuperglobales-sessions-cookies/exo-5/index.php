<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

if (isset($_POST['login'], $_POST['password'])) {
    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];
    setcookie('user', $userLogin, time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('pass', $userPassword, time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('pass', 'Jeudi', time() + 365 * 24 * 3600, null, null, false, true);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 5 partie 8 Variables superglobales, sessions et cookies</title>
</head>

<body>

    <?php if ($showForm) { ?>
        <form action="index.php" method="post">

            <div>
                <label for="user">Nom utilisateur :</label>
                <input type="text" id="login" name="login">
            </div>

            <div>
                <label for="pass">Mot de passe :</label>
                <input type="password" id="password" name="password">
            </div>

            <div>
                <input type="submit" value="Envoyer">
            </div>

        </form>
    <?php } else { ?>
        <p>
            <?php
            if (isset($_COOKIE['user'], $_COOKIE['pass'])) {
                echo 'Votre nom d\'utilisateur est ' . htmlspecialchars($_COOKIE['user']) . ' et votre mot de passe est ' . htmlspecialchars($_COOKIE['pass']) . ' . ';
            }
            ?>
        </p>
    <?php } ?>
    <!-- <p>
Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
</p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>