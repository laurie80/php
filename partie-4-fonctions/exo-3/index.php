<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 4 PHP</title>
</head>

<body>

   

<?php

function caracter($hello = "Bonjour", $identity = "Laurie") {
    $concatenation = $hello. " ".$identity; 
    return $concatenation;
    // ou 
    // return "$hello $identity";
  }
echo caracter();

?>

    <!-- <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p> -->

</body>

</html>