<?php

// Programme de test
include("isHoliday.php");

$date_debut = strtotime($_POST['date_debut']);
$date_fin = strtotime($_POST['date_fin']);

// Convertissez la date de début en objet DateTime avant la boucle

$nombreJoursFeries = 0;

while ($date_debut <= $date_fin) {
    if (isHoliday($date_debut)) {
        $nombreJoursFeries++;
    }

    $date_debut = strtotime('+1 day', $date_debut);
}

echo "Le nombre de jours fériés entre les deux dates est : $nombreJoursFeries </br>";

?>