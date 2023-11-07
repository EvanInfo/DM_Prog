<?php

    include_once('jourSemaine.php'); // Inclure le fichier contenant la fonction jourSemaine
    include_once('isHoliday.php'); // Inclure le fichier contenant la fonction isholiday

    // Fonction qui permet de calculer le nombre de jours de congé
    function solde($date_debut, $date_fin){
        $nombreJourConge = 0; // Initialiser le nombre de jours de congé à zéro
        $date = strtotime($date_debut); // Convertir la date de début en timestamp Unix
        $stockConge = 5; // Le solde de jours de congé de l'employé (dans cet exemple, 5 jours)
        $stockManque = 0; // Initialiser le nombre de jours manquants à zéro

        // Boucle qui parcourt les dates de début à fin (incluses)
        while($date <= strtotime($date_fin)){
            $jour = jourSemaine($date); // Obtenir le nom du jour de la semaine pour la date actuelle

            // Vérifier si le jour n'est ni un samedi ni un dimanche (jours non travaillés)
            if($jour != "Saturday" && $jour != "Sunday"){
                // Vérifier si la date n'est pas un jour férié
                if (!isholiday($date)){
                    $nombreJourConge++; // Incrémenter le nombre de jours de congé
                }
            }
            $date = strtotime('+1 day', $date); // Passer à la date suivante
        }

        // Si l'employé a pris plus de congés que son solde, calculer le nombre de jours manquants
        if($stockConge < $nombreJourConge){
            $stockManque = $nombreJourConge - $stockConge;  
        }

        // Retourner un tableau associatif contenant les résultats
        return [
            "Nombre de jour manquant" => $stockManque,
            "Nombre jour de conge" => $nombreJourConge
        ];
    }
?>
