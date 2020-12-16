<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <title>Exercice 1 partie 8 Variables superglobales, sessions et cookies</title>
</head>

<body>
<p class="text-center" id="userAgent"><span class="text-uppercase">user agent : </span><?=$_SERVER['HTTP_USER_AGENT']. '<br>'?></p>
<p class="text-center" id="remoteAddr"><span class="text-uppercase">adresse ip : </span><?=$_SERVER['REMOTE_ADDR']. '<br>'?></p>
<p class="text-center" id="name"><span class="text-uppercase">nom du serveur : </span><?=$_SERVER['SERVER_NAME']?></p>


    <!-- <p>
Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS.
## Exercice 1
Faire une page HTML permettant de donner à l'utilisateur :
- son User Agent
- son adresse ip
- le nom du serveur  
</p> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>