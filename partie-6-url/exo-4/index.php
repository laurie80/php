<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 6 PHP</title>
</head>

<body>

<a href="index.php?language=PHP&amp;server=LAMP">Par ici !</a>


<?php 
echo $_GET['language'] . ' ' . $_GET['server']; 
?>

<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?language=PHP&server=LAMP
</p> -->
</body>

</html>