<?PHP
/***************************************
*
* Affiche un calendrier mensuel
* sous forme d'un tableau
*
* $m = mois
* $y = année
*
****************************************/
function calendar ($m, $y)
{
$sem = array(6,0,1,2,3,4,5); // Correspondance des jours de la semaine : lundi = 0, dimanche = 6
$mois = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
$week = array('lu','ma','me','je','ve','sa','di');

$t = mktime(12, 0, 0, $m, 1, $y); // Timestamp du premier jour du mois

echo '<table><tbody>';

// Le mois
//--------
echo '<tr><td colspan="7">'.$mois[$m].'</td></tr>';

// Les jours de la semaine
//------------------------
echo '<tr>';
for ($i = 0 ; $i < 7 ; $i++)
{
echo '<td>'.$week[$i].'</td>';
}
echo '</tr>';

// Le calendrier
//--------------
for ($l = 0 ; $l < 6 ; $l++) // calendrier sur 6 lignes
{
echo '<tr>';
for ($i = 0 ; $i < 7 ; $i++) // 7 jours de la semaine
{
$w = $sem[(int)date('w',$t)]; // Jour de la semaine à traiter
$m2 = (int)date('n',$t); // Tant que le mois reste celui du départ
if (($w == $i) && ($m2 == $m)) // Si le jours de semaine et le mois correspondent
{
echo '<td>'.date('j',$t).'</td>'; // Affiche le jour du mois
$t += 86400; // Passe au jour suivant
}
else
{
echo '<td>&nbsp;</td>'; // Case vide
}
}
echo '</tr>';
}
echo '</tbody></table>';
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



 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>




<tbody>
            <tr>
                <?php
                for ($case = 1; $case <= ($nbDays + ($firstDayInMonth - 1)); $case++) {
                ?>
                    <td><?= $case ?></td>
                <?php
                }
                ?>
            </tr>

        </tbody>