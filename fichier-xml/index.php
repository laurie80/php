<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP Fichier XML Site Maçonnerie</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex">
        <div class="d-flex ml-auto justify-content-start align-items-start">
            <img class="image-responsive mx-auto " src="assets/img/Logo-Ocordo-Travaux-Amiens.png" alt="logo Ocordo"></img>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse col-lg-12 col-sm-12" id="navbarNav">
                <ul class="navbar-nav  ml- auto mx-auto ">
                    <li class="nav-item">
                        <a class="titleMenu mt-2" href="accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="qui-sommes-nous">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2" href="nos-clients-témoignent">Nos clients témoignent</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="contact">Contact</a>
                    </li>
                </ul>
            </div>
    </nav>
    </div>
    <?php
    // echo $_GET["page"];
    if (isset($_GET["page"]) && ($_GET["page"]) == 1) && $i->page {
        $xml = simplexml_load_file("source.xml");
        foreach ($xml->page as $i) {
            ?>
            <p class="title"><?= $i->title ?></p>
            <p class="content"><?= $i->content ?></p>
            <?php
        }
      }
    ?>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>