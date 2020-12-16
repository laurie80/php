<?php

var_dump($_POST);

if (isset($_POST['login']) && isset($_POST['password'])) {
    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];
    setcookie('user', $userLogin, time() + 365 * 24 * 3600);
    setcookie('pass', $userPassword, time() + 365 * 24 * 3600);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 3 partie 8 Variables superglobales, sessions et cookies</title>
</head>

<body>

    <form action="index.php" method="POST">

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

    <!-- <p>
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
A la validation du formulaire, stocker les informations dans un cookie. 
</p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>