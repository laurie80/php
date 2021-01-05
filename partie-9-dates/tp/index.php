<?php

$months = array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre",
);

$startIntYear = 2015;
$endIntYear = 2025; 

$date = date('d/m/Y');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP partie 9 Calendrier</title>
</head>


<body>

    <form action="calendrier.php" method="get">
        <div>
            <select name="months">
                <?php
                foreach ($months as $month) {
                ?>
                    <option><?= $month ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <select name="years">
                <?php
                for ($y = $startIntYear; $y <= $endIntYear; $y++) {
                ?>
                    <option><?= $y ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Valider">
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>