<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 6 PHP</title>
</head>

<body>

<a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Par ici !</a>


<?php 
echo $_GET['startDate'] . ' ' . $_GET['endDate']; 
?>

<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?startDate=2/05/2016&endDate=27/11/2016
</p> -->
</body>

</html>