  <?php

    $regexName = "/^[a-zA-Z]+$/";

    if (isset($_POST["firstName"]) && isset($_POST["lastname"])) {

        // Sécurisation des données, regex pour verifier prénom et nom
        if (preg_match($regexName, $_POST["firstName"])) {
            $securedFirstname = htmlspecialchars($_POST["firstName"]);
        } else {
            $securedFirstname = "<i>Mauvais format</i>";
        }

        if (preg_match($regexName, $_POST["lastName"])) {
            $securedLastname = htmlspecialchars($_POST["lastName"]);
        } else {
            $securedLastname = "<i>Mauvais format</i>";
        }
    }

    var_dump($_POST);

    ?>

  <!DOCTYPE html>
  <html lang="fr">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
      <title>Exercice 4 partie 7 Les Formulaires</title>
  </head>

  <body>

      <p>
          <p>Bonjour <?= $securedFirstname . " " . $securedLastname; ?></p>
      </p>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
      </script>

  </body>

  </html>