<?php
$name = "Laurie"; //déclaration des variables en amont
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 PHP</title>
</head>
<body>
    <p>Créer une variable **name** et l'initialiser avec la valeur de votre choix.  
Afficher : "Bonjour" + **name** + ", comment vas tu ?".</p>

<?php
// $name = "Laurie";
echo "Bonjour $name, comment vas-tu?<br>";

echo 'Bonjour' . $name . 'comment vas-tu?<br>'; //concatenation en php avec declaration des variables en amont au dessus de DOCTYPE
// echo $name;
// echo ", comment vas tu?";
?>
<!-- echo PHP avec declaration des variables en amont au dessus de DOCTYPE -->
<p><?php echo "Bonjour $name, comment vas-tu?"?><p>

<!-- echo court -->
<p><?= "Bonjour $name, comment vas-tu?"?><p> 

<!-- Intégration de code PHP dans le HTML en echo court, att ! déclaration des variables en amont au dessus de DOCTYPE obligatoire -->
<p>Bonjour <?= $name ?>, comment vas-tu?</p>

</body>
</html>