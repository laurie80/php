<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 4 PHP</title>
</head>

<body>

   

<?php

function compare($numberOne = 10, $numberTwo = 5) {
    if ($numberOne > $numberTwo) {
        return "Le premier nombre est plus grand";
    }
    else if ($numberOne < $numberTwo) {
        return "Le premier nombre est plus petit";
    }
    else {
        return "Les deux nombres sont identiques";
    }
  }
echo compare();

?>

    <!-- <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux</p> -->

</body>

</html>