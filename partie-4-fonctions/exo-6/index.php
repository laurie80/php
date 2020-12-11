<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 4 PHP</title>
</head>

<body>



    <?php

     function concact($name = "Dodré", $lastName = "Laurie", $age = 31)
    {
        return "Bonjour $name $lastName, tu as $age ans.";
    }
    echo concact();

    ?>

<!-- <p> Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. 
    Elle doit renvoyer une chaine de la forme :  
    "Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".
</p> -->

</body>

</html>