<?php
if (isset($_POST["civility"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])) {
    if (preg_match("/^[a-zA-Z]+$/", $_POST["civility"])) {
        $securedCivility = htmlspecialchars($_POST["civility"]);
    }
    if (preg_match("/^[a-zA-Z]+$/", $_POST["firstName"])) {
        $securedFirstName = htmlspecialchars($_POST["firstName"]);
    }
    if (preg_match("/^[a-zA-Z]+$/", $_POST["lastName"])) {
        $securedLastName = htmlspecialchars($_POST["lastName"]);
    }
    echo $securedCivility . '<br>';
    echo $securedFirstName . '<br>';
    echo $securedLastName . '<br>';
}
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    if ($_FILES['image']['size'] <= 3000000) {
        $infosfiles = pathinfo($_FILES['image']['name']);
        $extensionFiles = $infosfiles['extension'];
        $extensionsArray = array('jpg', 'JPEG', 'gif', 'png');
        if (in_array($extensionFiles, $extensionsArray)) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . time() . basename($_FILES['image']['name']));
            echo "Fichier bien envoyé" ;
        } else {
            echo "Veuillez choisir un fichier au format PDF";
        }
    }
} else {
    echo '<form action="index.php" method="post" enctype="multipart/form-data">
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
                        <input type="file" id="image" name="image" />
                    </div>
                    <div>
                        <input type="submit" value="Envoyer" href="index.php"/>
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
    <title>Exercice 7 partie 7 Les Formulaires</title>
</head>


<body>

    <!-- <p>
    Au formulaire de l'exercice 5, 
    ajouter un champ d'envoi de fichier. 
    Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. 
    </p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>