<?php
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
$date = strftime ('%A %d %B %Y');
$dateTimestamps = time();
$time = strftime ('%T');
$date1 = mktime(15, 00, 0, 8, 2, 2016);
// $date1 = strtotime('2016-08-02 15:00:00');


//Tableaux qui me donne une vue détaillé du Timestamp//
echo '<pre>';
print_r(getdate($date1));
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Exercice 4 Partie 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="uploadPreview/style.css">
</head>

<body>

    <p>
        Afficher le timestamp du jour.<br>
        Afficher le timestamp du mardi 2 août 2016 à 15h00.<br>
        "timestamp" = nombre de secondes écoulées depuis le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée.
    </p>

    <p><?='Timestamp du ' . $date . ' à ' . $time . ' : ' . $dateTimestamps . '<br>';?></p>
    <p><?='Timestamp du mardi 2 août 2016 à 15h00 : ' . $date1 . '<br>';?></p>

    <script src="uploadPreview/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>