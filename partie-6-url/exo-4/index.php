<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 6 PHP</title>
</head>

<body>

<button><a href="index.php?language=PHP&amp;server=LAMP">Envoi des paramètres</a></button>
<button><a href="index.php">Retour INDEX</a></button>

<?php

if (isset($_GET['language']) && isset($_GET['server']))
{
	echo $_GET['language'] . ' ' . $_GET['server'];
}
else 
{
	echo ' ';
}

?>
<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
    **index.php?language=PHP&server=LAMP
</p> -->
</body>

</html>