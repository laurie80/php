<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 4 partie 8 Variables superglobales, sessions et cookies</title>
</head>

<body>

    <p>
        <?php
        if (isset($_COOKIE['user'], $_COOKIE['pass'])) {
            echo 'Votre nom d\'utilisateur est ' . htmlspecialchars($_COOKIE['user']) . ' et votre mot de passe est ' . htmlspecialchars($_COOKIE['pass']) . ' . ';
        }
        ?>
    </p>

    <!-- <p>
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
</p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>