<?php

setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

$weeks = array(
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche",
);

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

if (isset($_GET["months"]) && isset($_GET["years"])) {
    $month = array_search($_GET["months"], $months) + 1;
    $years = $_GET["years"];

    $nbDays = cal_days_in_month(CAL_GREGORIAN, $month, $years);
    $firstDayInMonth = strftime("%u", strtotime($month . "/01/" . $years));

    if ((($nbDays + $firstDayInMonth - 1) % 7) != 0) {
        $extraCases = 7 - (($nbDays + $firstDayInMonth - 1) % 7);
    } else {
        $extraCases = 0;
    }
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Calendrier PHP</title>
</head>


<body>

    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1 class="text-center text-primary m-4"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

    <table class="table table-bordered">
        <thead class="title text-center text-white bg-dark">
            <tr>
                <?php
                foreach ($weeks as $week) {
                ?>
                    <th style="width: 100px;"><?= $week ?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
     
        <tbody class="text-center font-weight-bold">
            <tr>
                <?php
                for ($case = 1; $case <= ($nbDays + ($firstDayInMonth - 1 ) + $extraCases); $case++) {
                ?>
                    <td class="align-middle <?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $nbDays ? "" : "bg-secondary"?>" 
                    style="width: 100px; height: 80px"><?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $nbDays ? $case - $firstDayInMonth + 1 : "" ?></td>
                <?php
                    if ($case % 7 == 0) { 
                ?>
                    </tr>
                    <tr>
                <?php
                    }
                ?>
                <?php
                    }
                ?>
            </tr>
        </tbody>
        
    </table>

    <center><a href="index.php" class="btn btn-primary m-3">Retour</a></center>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>