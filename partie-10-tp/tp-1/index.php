<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP 1 partie 10</title>
</head>


<body>

    <h1 class="text-center">INSCRIPTION</h1>

    <div class="container">

        <form action="index.php" method="post">

            <div>
                <label for="lastName">Nom :</label>
                <input type="lastName" id="name" name="lastName">
            </div>

            <div>
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName">
            </div>

            <div>
                <label for="birthdayDate">Date de naissance :</label>
                <input type="date" id="birthdayDate" name="birthdayDate">
            </div>

            <div>
                <label for="birthCountry">Pays de naissance :</label>
                <input type="text" id="birthCountry" name="birthCountry">
            </div>

            <div>
                <label for="nationality">Nationalité :</label>
                <input type="text" id="nationality" name="nationality">
            </div>

            <div>
                <label for="nationality">Nationalité :</label>
                <input type="text" id="nationality" name="nationality">
            </div>

            <div>
                <label for="address">Adresse :</label>
                <input style="width: 300px" name="address" id="address" placeholder="ex: 8 rue du Château"></input>
            </div>
            <div>
                <label for="cp">Code Postal :</label>
                <input id="cp" name="cp" type="text" placeholder="ex: 75000">
            </div>
            <div>
                <label for="city">Ville :</label>
                <input id="city" name="city" type="text" placeholder="ex: Paris">
            </div>


            <input class="btn btn-primary m-3" type="submit" name="send" value="Envoyer">

        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>