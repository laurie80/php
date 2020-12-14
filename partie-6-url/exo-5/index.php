<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 Partie 6 PHP</title>
</head>

<body>

<button><a href="index.php?week=12">Envoi des paramètres</a></button>
<button><a href="index.php">Retour INDEX</a></button>

<?php

if (isset($_GET['week']))
{
	echo $_GET['week'];
}
else 
{
	echo ' ';
}

?>

<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher:
    **index.php?week=12**
</p> -->
</body>

</html>