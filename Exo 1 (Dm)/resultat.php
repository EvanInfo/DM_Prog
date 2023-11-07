<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
    <title>Votre titre ici</title>
</head>
<body>
    <?php
    include('connexion.php');

    // Récupère les dates du formulaire
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    $employe = solde($date_debut, $date_fin);
    echo "<div class='table-container'>";
    echo "<table>";
    echo "<tr><th>Label</th><th>Valeur</th></tr>";
    echo "<tr><td>Date de début</td><td>$date_debut</td></tr>";
    echo "<tr><td>Date de fin</td><td>$date_fin</td></tr>";
    echo "<tr><td>Nombre de jours de congé entre les deux dates</td><td>{$employe['Nombre jour de conge']} jours</td></tr>";
    echo "<tr><td>Nombre de jours manquants par rapport au solde de 5 jours</td><td>{$employe['Nombre de jour manquant']} jours</td></tr>";
    echo "</table>";
    echo "</div>";
    ?>
</body>
</html>
