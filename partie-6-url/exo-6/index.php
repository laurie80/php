<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 6 PHP</title>
</head>

<body>

<a href="index.php?building=12&amp;room=101">Par ici !</a>


<?php 
echo $_GET['building'] . ' ' . $_GET['room']; 
?>

<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?building=12&room=101**
</p> -->
</body>

</html>