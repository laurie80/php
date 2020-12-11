<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Partie 6 PHP</title>
</head>

<body>

<a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello</a>

<p>Bonjour <?php echo $_GET['lastname'] . ' ' . $_GET['firstname']; ?> !</p>

<!-- <p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
     **index.php?lastname=Nemare&firstname=Jean**
</p> -->
</body>

</html>