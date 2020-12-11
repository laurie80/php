<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 PHP</title>
</head>
<body>
    <p>Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  
**Attention** age est de type entier.  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".</p>

<?php
$lastname = "Dodré";
$firstname = "Laurie";
$age = 31;
echo "Bonjour $lastname $firstname, tu as $age ans.";
// echo "Bonjour ";
// echo $lastname;
// echo $firstname;
// echo ",tu as";
// echo $age;
// echo "ans.";

?>

</body>
</html>