<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 4 PHP</title>
</head>

<body>



    <?php

    function concact($numberOne = 20, $text = "est la note que Nicolas nous attribuera")
    {
        // $concatenation = $numberOne. " " .$text; 
        // return $concatenation;
        // ou
        return "$numberOne $text";
    }
    echo concact();

    ?>

    <!-- <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p> -->

</body>

</html>