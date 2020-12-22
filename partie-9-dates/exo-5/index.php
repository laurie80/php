<?php
//Traduction de la date en français//
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
//date actuelle//
$date = strftime ('%A %d %B %Y');
$time = strftime ('%T');
//date définie en string//
$date1 = ('16 mai 2016');
//Timestamps de la date actuelle//
$dateTimestamps = time();
//Timestamps de la date définie en deux versions//
// $date2 = mktime(00, 00, 0, 5, 16, 2016);
$date2 = strtotime('2016-05-16 00:00:00');

//Tableaux qui me donne une vue détaillé du Timestamp//
echo '<pre>';
print_r(getdate($dateTimestamps));
echo '</pre>';

echo '<pre>';
print_r(getdate($date2));
echo '</pre>';

function dateDiff($dateTimestamps, $date2){
    $diff = abs($dateTimestamps - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return $retour;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Exercice 5 Partie 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="uploadPreview/style.css">
</head>

<body>

    <p>
        Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    </p>

    <p><?='Timestamp du ' . $date . ' à ' . $time . ' : ' . $dateTimestamps . '<br>';?></p>
    <p><?='Timestamp du 16 mai 2016 : ' . $date2 . '<br>';?></p>
    <p><?='Le nombre de jours qui sépare la date du ' . $date . ' à la date du ' . $date1 . ' est de ' . $diff . '<br>';?></p>

    <script src="uploadPreview/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>