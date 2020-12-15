<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 4 partie 7 Les Formulaires</title>
</head>

<body>

<!-- Avec la mèthode POST, les paramétres d'url n'apparaisse pas dans l'url du navigateur  -->

    <form action="user.php" method="post">

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
            <input type="submit" value="Envoyer" href="user.php"/>
        </div>
    </form>



    <!-- <p>
   Avec le formulaire de l'exercice 2, 
   afficher dans la page user.php les données du formulaire transmises.
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