<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Partie 2 PHP</title>
</head>
<body>
<p>Créer une variable **age** et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.</p>

<?php
$age = 31;

if ($age >= 18) {
    echo "Vous êtes majeur";
}
else {
    echo "Vous êtes mineur";
}
?>
    
</body>
</html>