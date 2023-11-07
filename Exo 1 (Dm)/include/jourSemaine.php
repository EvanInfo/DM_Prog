<?php

// Fonction qui récupère la date pour obtenir le jour en lettre
function jourSemaine($timestamp) {

    // Convertir le timestamp Unix en une chaîne de date au format "YYYY-MM-DD"
    $dateTexte = date('Y-m-d', $timestamp);

    $dateObj = new DateTime($dateTexte);

    $jourSemaine = $dateObj->format('l');
    // Renvoi le jour de la semaine
    return $jourSemaine;
}

?>
