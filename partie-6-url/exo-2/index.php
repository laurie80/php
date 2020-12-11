<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 6 PHP</title>
</head>

<body>

<a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello</a>

<?php

if (isset($_GET['age']))
{
	echo $_GET['age'];
}
else
{
	echo 'Il faut renseigner un age !';
}

?>
<!-- <p>Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : 
    **index.php?lastname=Nemare&firstname=Jean**</p> -->

</body>

</html>