<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 6 PHP</title>
</head>

<body>

<button><a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Envoi des paramètres</a></button>
<button><a href="index.php">Retour INDEX</a></button>

<?php

if (isset($_GET['startDate']) && isset($_GET['endDate']))
{
	echo $_GET['startDate'] . ' ' . $_GET['endDate'];
}
else 
{
	echo ' ';
}

?>
<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?startDate=2/05/2016&endDate=27/11/2016
</p> -->
</body>

</html>

