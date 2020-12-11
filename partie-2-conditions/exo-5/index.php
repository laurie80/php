<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 2 PHP</title>
</head>
<body>
<!-- <p>Traduire ce code avec des if et des else :  
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
</p> -->

<?php
$gender = "Homme";

if ($gender != "Homme") {
    echo "C'est un développeuse !!!";
}
else {
    echo "C'est une développeur !!!";
}

?>

    
</body>
</html>