<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexCountryNationality = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexMail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/";
$regexBirthDate = "/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.]((?|19|20)\d\d)$/";
$regexPhoneNumber = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
$regexPoleEmploi = "/^([0-9]{7}+[A-Z]{1})$/";
$regexBadgeNumber = "/^([0-9]{1,3})$/";

// Sécurisation des données, regex pour verifier prénom et nom
// preg_match : permet de rechercher des motifs bien précis au sein d’une chaîne de caractères
// htmlspecialchars : Convertit les caractères spéciaux en entités HTML

$error = [];

if (!empty($_POST)) {

    if (isset($_POST["lastname"])) {
        if (preg_match($regexName, $_POST["lastname"])) {
            $securedLastname = htmlspecialchars($_POST["lastname"]);
        } else {
            $error["Lastname"] = "<i>Erreur, veuillez entrer votre nom</i>";
        }

        if (empty($_POST["lastname"])) {
            $error["Lastname"] = "<i>Veuillez renseigner le champ</i>";
        }
    }


    if (isset($_POST["firstname"])) {
        if (preg_match($regexName, $_POST["firstname"])) {
            $securedFirstname = htmlspecialchars($_POST["firstname"]);
        } else {
            $error["Firstname"] = "<i>Erreur, veuillez entrer votre prénom</i>";
        }

        if (empty($_POST["firstname"])) {
            $error["Firstname"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["birthDate"])) {
        if (preg_match($regexBirthDate, $_POST["birthDate"])) {
            $securedBirthDate = htmlspecialchars($_POST["birthDate"]);
        } else {
            $error["BirthDate"] = "<i>Erreur, veuillez entrer votre date de naissance (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["birthDate"])) {
            $error["BirthDate"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["birthCountry"])) {
        if (preg_match($regexCountryNationality, $_POST["birthCountry"])) {
            $securedBirthCountry = htmlspecialchars($_POST["birthCountry"]);
        } else {
            $error["BirthCountry"] = "<i>Erreur, veuillez entrer votre pays de naissance</i>";
        }

        if (empty($_POST["birthCountry"])) {
            $error["BirthCountry"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["nationality"])) {
        if (preg_match($regexCountryNationality, $_POST["nationality"])) {
            $securedNationality = htmlspecialchars($_POST["nationality"]);
        } else {
            $error["Nationality"] = "<i>Erreur, veuillez entrer votre nationalité</i>";
        }

        if (empty($_POST["nationality"])) {
            $error["Nationality"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["address"])) {
        $securedAddress = htmlspecialchars($_POST["address"]);

        if (empty($_POST["address"])) {
            $error["Adress"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $securedEmail = htmlspecialchars($_POST["email"]);
        } else {
            $error["Mail"] = "<i>Erreur, veuillez entrer votre email (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["email"])) {
            $error["Mail"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["phoneNumber"])) {
        if (preg_match($regexPhoneNumber, $_POST["phoneNumber"])) {
            $securedPhoneNumber = htmlspecialchars($_POST["phoneNumber"]);
        } else {
            $error["PhoneNumber"] = "<i>Erreur, veuillez entrer votre numéro de téléphone (voir la forme ci-dessus)</i>";
        }

        if (empty($_POST["phoneNumber"])) {
            $error["PhoneNumber"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    // à modifier 
    // if (isset($_POST["diploma"])) {
    //     if ((($_POST["diploma"]) != "Aucun") || ($_POST["diploma"] != "BAC") || ($_POST["diploma"] != "BAC + 2") || ($_POST["diploma"] != "BAC + 3 ou supérieur")) {
    //         $error["Diploma"] = "<i>Erreur, veuillez sélectionner votre niveau d'études</i>";
    //     } else {
    //         $securedDiploma = htmlspecialchars($_POST["diploma"]);
    //     }
    // }

    if (isset($_POST["poleemploiNumber"])) {
        if (preg_match($regexPoleEmploi, $_POST["poleemploiNumber"])) {
            $securedPoleEmploiNumber = htmlspecialchars($_POST["poleemploiNumber"]);
        } else {
            $error["PoleEmploiNumber"] = "<i>Erreur, veuillez entrer votre identifiant (7 chiffres + 1 lettre)</i>";
        }

        if (empty($_POST["poleemploiNumber"])) {
            $error["PoleEmploiNumber"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["badge"])) {
        if (preg_match($regexBadgeNumber, $_POST["badge"])) {
            $securedBadge = htmlspecialchars($_POST["badge"]);
        } else {
            $error["Badge"] = "<i>Erreur, veuillez renseigner votre nombre de badges</i>";
        }

        if (empty($_POST["badge"])) {
            $error["Badge"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["codecademyLink"])) {
        if (filter_var($_POST["codecademyLink"], FILTER_VALIDATE_URL)) {
            $securedCodecademyLink = htmlspecialchars($_POST["codecademyLink"]);
        } else {
            $error["CodecademyLink"] = "<i>Erreur, veuillez entrer une url</i>";
        }

        if (empty($_POST["codecademyLink"])) {
            $error["CodecademyLink"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["heroTextarea"])) {
        $securedHeroTextarea = htmlspecialchars($_POST["heroTextarea"]);

        if (empty($_POST["heroTextarea"])) {
            $error["HeroTextarea"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["hackTextarea"])) {
        $securedHackTextarea = htmlspecialchars($_POST["hackTextarea"]);

        if (empty($_POST["hackTextarea"])) {
            $error["HackTextarea"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    //EXP YES NO RADIO

    // END EXP YES NO RADIO
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Partie 10 - TP 1</title>
</head>

<body>

    <?php
    if ($showForm) {
    ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="form" action="index.php" method="post">
                        <h1 class="text-center text-info">Formulaire d'inscription</h1>
                        <div class="mt-5">
                            <label for="lastname">Nom :</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="mt-3">
                            <label for="firstname">Prénom :</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom">
                        </div>
                        <div class="mt-3">
                            <label for="birthDate">Date de naissance :</label>
                            <input type="text" name="birthDate" id="birthDate" class="form-control" placeholder="01/01/1995 ou 01-01-1995 ou 01.01.1995">
                        </div>
                        <div class="mt-3">
                            <label for="birthCountry">Pays de naissance :</label>
                            <input type="text" name="birthCountry" id="birthCountry" class="form-control" placeholder="Votre pays de naissance">
                        </div>
                        <div class="mt-3">
                            <label for="nationality">Nationalité :</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Votre nationalité">
                        </div>
                        <div class="mt-3">
                            <label for="address">Adresse :</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Votre adresse">
                        </div>
                        <div class="mt-3">
                            <label for="email">Adresse email :</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com">
                        </div>
                        <div class="mt-3">
                            <label for="phoneNumber">Numéro de téléphone :</label>
                            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="0... ou +33...">
                        </div>
                        <div class="mt-3">
                            <label for="adress">Diplôme :</label>
                            <select name="diploma">
                                <option value="Aucun">Aucun</option>
                                <option value="BAC">BAC</option>
                                <option value="BAC + 2">BAC + 2</option>
                                <option value="BAC + 3 ou supérieur">BAC + 3 ou supérieur</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="poleemploiNumber">Numéro Pôle emploi :</label>
                            <input type="text" name="poleemploiNumber" id="poleemploiNumber" class="form-control" placeholder="Votre numéro d'identifiant Pôle emploi">
                        </div>
                        <div class="mt-3">
                            <label for="badge">Nombre de badge :</label>
                            <input type="text" name="badge" id="badge" class="form-control" placeholder="Votre nombre de badge">
                        </div>
                        <div class="mt-3">
                            <label for="codecademyLink">Lien codecademy</label>
                            <input type="url" name="codecademyLink" id="codecademyLink" class="form-control" placeholder="Votre lien codecademy">
                        </div>
                        <div class="mt-3">
                            <label for="heroTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                            <textarea id="heroTextarea" name="heroTextarea" rows="5" placeholder="blablabla..."></textarea>
                        </div>
                        <div class="mt-3">
                            <label for="hackTextarea">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                            <textarea id="hackTextarea" name="hackTextarea" rows="5" placeholder="blablabla..."></textarea>
                        </div>
                        <div class="mt-3">
                            <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                            <div>
                                <input type="radio" id="yes" name="expYesNo" value="Oui">
                                <label for="yes">Oui</label>
                            </div>
                            <div>
                                <input type="radio" id="no" name="expYesNo" value="Non">
                                <label for="no">Non</label>
                            </div>
                        </div>

                        <div class="mt-4 mb-5 d-flex justify-content-between">
                            <input type="submit" class="btn btn-info btn-md" value="Valider le formulaire">
                            <input type="reset" class="btn btn-secondary btn-md" value="Remise à zéro">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
    } else {
    ?>

        <?php
        if (count($error) == 0) {
        ?>

            <h1 class="text-center text-info mt-5">Merci pour votre inscription</h1>

        <?php
        } else {
        ?>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form class="form" action="index.php" method="post">
                            <h1 class="text-center text-info">Formulaire d'inscription</h1>
                            <div class="mt-5">
                                <label for="lastname">Nom :</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom" value="<?= isset($securedLastname) ? $securedLastname : "" ?>">
                                <span style="color:red;"><?= isset($error["Lastname"]) ? $error["Lastname"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="firstname">Prénom :</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="<?= isset($securedFirstname) ? $securedFirstname : "" ?>">
                                <span style="color:red;"><?= isset($error["Firstname"]) ? $error["Firstname"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="birthDate">Date de naissance :</label>
                                <input type="text" name="birthDate" id="birthDate" class="form-control" placeholder="01/01/1995 ou 01-01-1995 ou 01.01.1995" value="<?= isset($securedBirthDate) ? $securedBirthDate : "" ?>">
                                <span style="color:red;"><?= isset($error["BirthDate"]) ? $error["BirthDate"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="birthCountry">Pays de naissance :</label>
                                <input type="text" name="birthCountry" id="birthCountry" class="form-control" placeholder="Votre pays de naissance" value="<?= isset($securedBirthCountry) ? $securedBirthCountry : "" ?>">
                                <span style="color:red;"><?= isset($error["BirthCountry"]) ? $error["BirthCountry"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="nationality">Nationalité :</label>
                                <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Votre nationalité" value="<?= isset($securedNationality) ? $securedNationality : "" ?>">
                                <span style="color:red;"><?= isset($error["Nationality"]) ? $error["Nationality"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="address">Adresse :</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Votre adresse" value="<?= isset($securedAddress) ? $securedAddress : "" ?>">
                                <span style="color:red;"><?= isset($error["Adress"]) ? $error["Adress"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="email">Adresse email :</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com" value="<?= isset($securedEmail) ? $securedEmail : "" ?>">
                                <span style="color:red;"><?= isset($error["Mail"]) ? $error["Mail"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="phoneNumber">Numéro de téléphone :</label>
                                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="0... ou +33..." value="<?= isset($securedPhoneNumber) ? $securedPhoneNumber : "" ?>">
                                <span style="color:red;"><?= isset($error["PhoneNumber"]) ? $error["PhoneNumber"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="adress">Diplôme :</label>
                                <select name="diploma">
                                    <option value="<?= isset($securedDiploma) ? $securedDiploma : "" ?>">Aucun</option>
                                    <option value="<?= isset($securedDiploma) ? $securedDiploma : "" ?>">BAC</option>
                                    <option value="<?= isset($securedDiploma) ? $securedDiploma : "" ?>">BAC + 2</option>
                                    <option value="<?= isset($securedDiploma) ? $securedDiploma : "" ?>">BAC + 3 ou supérieur</option>
                                </select>
                                <span style="color:red;"><?= isset($error["Diploma"]) ? $error["Diploma"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="poleemploiNumber">Numéro Pôle emploi :</label>
                                <input type="text" name="poleemploiNumber" id="poleemploiNumber" class="form-control" placeholder="Votre numéro d'identifiant Pôle emploi" value="<?= isset($securedPoleEmploiNumber) ? $securedPoleEmploiNumber : "" ?>">
                                <span style="color:red;"><?= isset($error["PoleEmploiNumber"]) ? $error["PoleEmploiNumber"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="badge">Nombre de badge :</label>
                                <input type="text" name="badge" id="badge" class="form-control" placeholder="Votre nombre de badge" value="<?= isset($securedBadge) ? $securedBadge : "" ?>">
                                <span style="color:red;"><?= isset($error["Badge"]) ? $error["Badge"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="codecademyLink">Lien codecademy</label>
                                <input type="url" name="codecademyLink" id="codecademyLink" class="form-control" placeholder="Votre lien codecademy" value="<?= isset($securedCodecademyLink) ? $securedCodecademyLink : "" ?>">
                                <span style="color:red;"><?= isset($error["CodecademyLink"]) ? $error["CodecademyLink"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="heroTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                                <textarea id="heroTextarea" name="heroTextarea" rows="5" placeholder="blablabla..."><?= isset($securedHeroTextarea) ? $securedHeroTextarea : "" ?></textarea>
                                <span style="color:red;"><?= isset($error["HeroTextarea"]) ? $error["HeroTextarea"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <label for="hackTextarea">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                                <textarea id="hackTextarea" name="hackTextarea" rows="5" placeholder="blablabla..."><?= isset($securedHackTextarea) ? $securedHackTextarea : "" ?></textarea>
                                <span style="color:red;"><?= isset($error["HackTextarea"]) ? $error["HackTextarea"] : "" ?></span>
                            </div>
                            <div class="mt-3">
                                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                                <div>
                                    <input type="radio" id="yes" name="expYesNo" value="Oui">
                                    <label for="yes">Oui</label>
                                </div>
                                <div>
                                    <input type="radio" id="no" name="expYesNo" value="Non">
                                    <label for="no">Non</label>
                                </div>
                            </div>

                            <div class="mt-4 mb-5 d-flex justify-content-between">
                                <input type="submit" class="btn btn-info btn-md" value="Valider le formulaire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <?php
        }
        ?>

    <?php
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>