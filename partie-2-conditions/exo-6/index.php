<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 2 PHP</title>
</head>
<body>

<!-- <p>Traduire ce code avec des if et des else :  
  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
</p> -->

<?php
$age = 31;

if ($age >= 18) {
    echo "Tu es majeur";
}
else {
    echo "Tu n'es pas majeur";
}

?>
   
</body>
</html>