<?php

require_once 'index_controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/img/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP 1 partie 10</title>
</head>


<body>

    <?php if ($showForm) { ?>

        <h1>INSCRIPTION</h1>

        <form action="index.php" method="post">

            <div>
                <label for="lastName">Nom :</label>
                <input type="lastName" id="lastName" name="lastName" placeholder="ex : Dupont">
            </div>

            <div>
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName" placeholder="ex: Jean">
            </div>

            <div>
                <label for="birthdayDate">Date de naissance :</label>
                <input type="text" id="birthdayDate" name="birthdayDate" placeholder="ex: 01/01/2001">
            </div>

            <div>
                <label for="birthCountry">Pays de naissance :</label>
                <input type="text" id="birthCountry" name="birthCountry" placeholder="ex: France">
            </div>
            <div>
                <label for="nationality">Nationalité :</label>
                <input type="text" id="nationality" name="nationality" placeholder="ex: Française">
            </div>
            <div>
                <label for="address">Adresse :</label>
                <input name="address" id="address" placeholder="ex: 8 rue du Château 75000 PARIS"></input>
            </div>
            <div>
                <label for="email">E-Mail :</label>
                <input id="email" name="email" type="mail" placeholder="ex: patrick-dupont@outlook.fr">
            </div>
            <div>
                <label for="phone">Numéro de téléphone :</label>
                <input id="phoneNumber" name="phoneNumber" type="text">
            </div>
            <div>
                <label for="diplomas">Diplômes :</label>
                <select name="select">
                    <option>Sans diplôme</option>
                    <option>Bac</option>
                    <option>Bac +2</option>
                    <option>Bac +3</option>
                    <option>Etudes supérieurs</option>
                </select>
            </div>
            <div>
                <label for="numberUnemployed">Numéro Pôle Emploi :</label>
                <input id="numberUnemployed" name="numberUnemployed" type="text">
            </div>
            <div>
                <label for="numberBadges">Nombre de badges :</label>
                <input id="numberBadges" name="numberBadges" type="text" placeholder="ex: 3">
            </div>
            <div>
                <label for="connectionsCodecademy">Liens Codecademy :</label>
                <input id="connectionsCodecademy" name="connectionsCodecademy" type="text">
            </div>
            <div>
                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                <textarea id="question" name="question" type="text"></textarea>
            </div>
            <div>
                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</p>
                <textarea id="hacks" name="hacks" type="text"></textarea>
            </div>
            <!-- <div>
                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                <label for="yes">Oui</label>
                <input type="radio" name="choice" id="yes" value="Oui">
                <label for="no">Non</label>
                <input type="radio" name="choice" id="no" value="Non">
            </div> -->

            <div class="button">
                <button type="submit" name="submit">Envoyer</button>
            </div>

        </form>

    <?php
    } else {
    ?>

        <?php
        if (count($error) == 0) {
        ?>

            <h1 class="text-center">Inscription terminèe</h1>

        <?php
        } else {
        ?>

            <form action="index.php" method="post">

                <div>
                    <div>
                        <label for="lastName">Nom :</label>
                        <input type="lastName" id="lastName" name="lastName" placeholder="ex : Dupont" value="<?= isset($securedlastName) ? $securedlastName : "" ?>">
                        <span style="color:red;"><?= isset($error["lastName"]) ? $error["lastName"] : "" ?></span>
                    </div>
                    <div>
                        <label for="firstName">Prénom :</label>
                        <input type="text" id="firstName" name="firstName" placeholder="ex: Jean" value="<?= isset($securedFirstName) ? $securedFirstName : "" ?>">
                        <span style="color:red;"><?= isset($error["firstName"]) ? $error["firstName"] : "" ?></span>
                    </div>
                    <div>
                        <label for="birthdayDate">Date de naissance :</label>
                        <input type="text" id="birthdayDate" name="birthdayDate" placeholder="ex: 01/01/2001" value="<?= isset($securedBirthdayDate) ? $securedBirthdayDate : "" ?>">
                        <span style="color:red;"><?= isset($error["birthdayDate"]) ? $error["birthdayDate"] : "" ?></span>
                    </div>
                    <div>
                        <label for="birthCountry">Pays de naissance :</label>
                        <input type="text" id="birthCountry" name="birthCountry" placeholder="ex: France" value="<?= isset($securedBirthCountry) ? $securedBirthCountry : "" ?>">
                        <span style="color:red;"><?= isset($error["birthCountry"]) ? $error["birthCountry"] : "" ?></span>
                    </div>
                    <div>
                        <label for="nationality">Nationalité :</label>
                        <input type="text" id="nationality" name="nationality" placeholder="ex: Française" value="<?= isset($securedNationality) ? $securedNationality : "" ?>">
                        <span style="color:red;"><?= isset($error["Nationality"]) ? $error["Nationality"] : "" ?></span>
                    </div>
                    <div>
                        <label for="address">Adresse :</label>
                        <input name="address" id="address" placeholder="ex: 8 rue du Château 75000 PARIS" value="<?= isset($securedAddress) ? $securedAddress : "" ?>">
                        <span style="color:red;"><?= isset($error["Adress"]) ? $error["Adress"] : "" ?></span>
                    </div>
                    <div>
                        <label for="email">E-Mail :</label>
                        <input id="email" name="email" type="mail" placeholder="ex: patrick-dupont@outlook.fr" value="<?= isset($securedMail) ? $securedMail : "" ?>">
                        <span style="color:red;"><?= isset($error["email"]) ? $error["email"] : "" ?></span>
                    </div>
                    <div>
                        <label for="phone">Numéro de téléphone :</label>
                        <input id="phoneNumber" name="phoneNumber" type="text" value="<?= isset($securedPhone) ? $securedPhone : "" ?>">
                        <span style="color:red;"><?= isset($error["phoneNumber"]) ? $error["phoneNumber"] : "" ?></span>
                    </div>
                    <div>
                        <label for="diplomas">Diplômes :</label>
                        <select name="select">
                            <option value="<?= isset($securedDiplomas) ? $securedDiplomas : "" ?>">Sans diplôme</option>
                            <option value="<?= isset($securedDiplomas) ? $securedDiplomas : "" ?>">Bac</option>
                            <option value="<?= isset($securedDiplomas) ? $securedDiplomas : "" ?>">Bac +2</option>
                            <option value="<?= isset($securedDiplomas) ? $securedDiplomas : "" ?>">Bac +3 ou supérieur</option>
                            <option value="<?= isset($securedDiplomas) ? $securedDiplomas : "" ?>">Etudes supérieurs</option>
                        </select>
                        <span style="color:red;"><?= isset($error["select"]) ? $error["select"] : "" ?></span>
                    </div>
                    <div>
                        <label for="numberUnemployed">Numéro Pôle Emploi :</label>
                        <input id="numberUnemployed" name="numberUnemployed" type="text" value="<?= isset($securedNumberUnemployed) ? $securedNumberUnemployed : "" ?>">
                        <span style="color:red;"><?= isset($error["numberUnemployed"]) ? $error["numberUnemployed"] : "" ?></span>
                    </div>
                    <div>
                        <label for="numberBadges">Nombre de badges :</label>
                        <input id="numberBadges" name="numberBadges" type="text" placeholder="ex: 3" value="<?= isset($securedNumberBadges) ? $securedNumberBadges : "" ?>">
                        <span style="color:red;"><?= isset($error["numberBadges"]) ? $error["numberBadges"] : "" ?></span>
                    </div>
                    <div>
                        <label for="connectionsCodecademy">Liens Codecademy :</label>
                        <input id="connectionsCodecademy" name="connectionsCodecademy" type="text" value="<?= isset($securedConnection) ? $securedConnection : "" ?>">
                        <span style="color:red;"><?= isset($error["connectionsCodecademy"]) ? $error["connectionsCodecademy"] : "" ?></span>
                    </div>
                    <div>
                        <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                        <textarea id="question" name="question" type="text"><?= isset($securedQuestion) ? $securedQuestion : "" ?></textarea>
                        <span style="color:red;"><?= isset($error["question"]) ? $error["question"] : "" ?></span>
                    </div>
                    <div>
                        <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</p>
                        <textarea id="hacks" name="hacks" type="text"><?= isset($securedHacks) ? $securedHacks : "" ?></textarea>
                        <span style="color:red;"><?= isset($error["hacks"]) ? $error["hacks"] : "" ?></span>
                    </div>
                    <!-- <div>
                    <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                    <label for="yes">Oui</label>
                    <input type="radio" name="choice" id="yes" value="Oui">
                    <label for="no">Non</label>
                    <input type="radio" name="choice" id="no" value="Non">
                </div> -->

                    <div class="button">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>

            </form>

        <?php
        }
        ?>

    <?php
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>