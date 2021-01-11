<?php

$error = [];

$degreesArray = [
    1 => 'Sans diplôme',
    2 => 'Bac',
    3 => 'Bac +2',
    4 => 'Bac +3 ou sup'
];

$regexText = "/^[a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]+$/";
$regexDate = "/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/";
$regexAddress = "/^[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)+/";
$regexPhone = "/^[0-9+\(\)#\.\s\/ext-]+$/";
//Modifier la regex pour limiter le nombre de chiffre à 7 et à 1 la lettre majuscule//
$regexNumberUnemployed = "/^([0-9]{7}+[A-Z])$/";
$regexNumber = "/^([0-9]{1,3})$/";


    if (isset($_POST["lastName"])) {
        if (empty($_POST["lastName"])) {
            $error["lastName"] = "Veuillez renseigner votre nom";
        } else {
            if (!preg_match($regexText, $_POST["lastName"])) {
                $error["lastName"] = "Veuillez utilisez que des lettres majuscules et/ou  minuscules pour renseigner ce champ";
            }
        }
    }

    if (isset($_POST["firstName"])) {
        if (empty($_POST["firstName"])) {
            $error["firstName"] = "Veuillez renseigner votre prénom";
        } else {
            if (!preg_match($regexText, $_POST["firstName"])) {
                $error["firstName"] = "Veuillez utilisez que des lettres majuscules et/ou  minuscules pour renseigner ce champ";
            }
        }
    }

    if (isset($_POST["birthdayDate"])) {
        if (empty($_POST["birthdayDate"])) {
            $error["birthdayDate"] = "Veuillez renseigner votre date d'anniversaire";
        } else {
            if (!preg_match($regexDate, $_POST["birthdayDate"])) {
                $error["birthdayDate"] = "Mauvais format (voir exemple)";
            }
        }
    }

    if (isset($_POST["birthCountry"])) {
        if (empty($_POST["birthCountry"])) {
            $error["birthCountry"] = "Veuillez renseigner votre pays de naissance";
        } else {
            if (!preg_match($regexText, $_POST["birthCountry"])) {
                $error["birthCountry"] = "Veuillez utilisez que des lettres majuscules et/ou minuscules pour renseigner ce champ";
            }
        }
    }

    if (isset($_POST["nationality"])) {
        if (empty($_POST["nationality"])) {
            $error["nationality"] = "Veuillez renseigner votre nationalité";
        } else {
            if (!preg_match($regexText, $_POST["nationality"])) {
                $error["nationality"] = "Veuillez utilisez que des lettres majuscules et/ou minuscules pour renseigner ce champ";
            }
        }
    }

    if (isset($_POST["address"])) {
        if (empty($_POST["address"])) {
            $error["address"] = "Veuillez renseigner votre adresse";
        } else {
            if (!preg_match($regexAddress, $_POST["address"])) {
                $error["address"] = "Mauvais format (voir exemple)";
            }
        }
    }

    if (isset($_POST["email"])) {
        if (empty($_POST["email"])) {
            $error["email"] = "Veuillez renseigner votre adresse de messagerie internet";
        } else {
            if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                $error["email"] = "Adresse mail incorrect";
            }
        }
    }

    if (isset($_POST["phoneNumber"])) {
        if (empty($_POST["phoneNumber"])) {
            $error["phoneNumber"] = "Veuillez renseigner votre numéro de téléphone";
        } else {
            if (!preg_match($regexPhone, $_POST["phoneNumber"])) {
                $error["phoneNumber"] = "Mauvais format (voir exemple)";
            }
        }
    }

    if (!array_key_exists("select", $_POST)) {
        $error["select"] = "Veuillez choisir le niveau de diplôme obtenu";
    }


    if (isset($_POST["numberUnemployed"])) {
        if (empty($_POST["numberUnemployed"])) {
            $error["numberUnemployed"] = "Veuillez renseigner votre numéro Pôle Emploi";
        } else {
            if (!preg_match($regexNumberUnemployed, $_POST["numberUnemployed"])) {
                $error["numberUnemployed"] = "Votre identifiant Pôle Emploi doit contenir 7 chiffres et 1 lettre Majuscule";
            }
        }
    }

    if (isset($_POST["numberBadges"])) {
        if (empty($_POST["numberBadges"])) {
            $error["numberBadges"] = "Veuillez renseigner le nombre de badges obtenus";
        } else {
            if (!preg_match($regexNumber, $_POST["numberBadges"])) {
                $error["numberBadges"] = "Mauvais format (voir exemple)";
            }
        }
    }

    if (isset($_POST["connectionsCodecademy"])) {
        if (empty($_POST["connectionsCodecademy"])) {
            $error["connectionsCodecademy"] = "Veuillez renseigner votre votre lien Codecademy";
        } else {
            if (!filter_input(INPUT_POST, "connectionsCodecademy", FILTER_VALIDATE_URL)) {
                $error["connectionsCodecademy"] = "Liens Codecademy incorrect";
            }
        }
    }

    if (isset($_POST["question"])) {
        if (empty($_POST["question"])) {
            $error["question"] = "Veuillez renseigner ce champ";
        }
    }

    if (isset($_POST["hacks"])) {
        if (empty($_POST["hacks"])) {
            $error["hacks"] = "Veuillez renseigner ce champ";
        }
    }

    if (!array_key_exists("choice", $_POST)) {
        $error["choice"] = "Veuillez renseigner un choix par Oui ou par Non";
    }

    if (count($error) == 0) {
        $securedLastName = htmlspecialchars($_POST["lastName"]);
        $securedFirstName = htmlspecialchars($_POST["firstName"]);
        $securedBirthdayDate = htmlspecialchars($_POST["birthdayDate"]);
        $securedBirthCountry = htmlspecialchars($_POST["birthCountry"]);
        $securedNationality = htmlspecialchars($_POST["nationality"]);
        $securedAddress = htmlspecialchars($_POST["address"]);
        $securedMail = $_POST["email"];
        $securedPhone = htmlspecialchars($_POST["phoneNumber"]);
        $securedNumberUnemployed = htmlspecialchars($_POST["numberUnemployed"]);
        $securedDiplomas = $_POST["select"];
        $securedNumberBadges = htmlspecialchars($_POST["numberBadges"]);
        $securedConnection = $_POST["connectionsCodecademy"];
        $securedQuestion = htmlspecialchars($_POST["question"]);
        $securedHacks = htmlspecialchars($_POST["hacks"]);
        $securedChoice = $_POST["choice"];
    }

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

var_dump($_POST);

?>
