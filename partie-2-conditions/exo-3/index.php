<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 2 PHP</title>
</head>
<body>
<!-- <p>Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :
- Homme
- Femme  
En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**  

Gérer tous les cas.
</p> -->

<?php
$age = 31;
$gender = "Femme";

if ($age >= 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes majeur";
}
else if ($age <= 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes mineur";
}
else if ($age >= 18 && $gender == "Femme") {
    echo "Vous êtes une femme et vous êtes majeur";
}
else {
    echo "Vous êtes une femme et vous êtes mineur";
}

?>
    
</body>
</html>