<?php
require_once 'class/homme.class.php'; 
require_once 'class/femme.class.php'; 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemple avec des classes séparées</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Exo 3 POO </h1>
    <div class="center">
        <div class="container">
            <form method="post" action="action.php">
                <label for="sexe">Choisissez le sexe : </label>
                <select name="sexe" id="sexe">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select><br>
                
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom"><br>

                <label for="age">Âge : </label>
                <input type="number" name="age" id="age"><br>

                <input type="submit" name="submit" value="Créer et présenter">
            </form>
        </div>
        <?php
        if (isset($_SESSION['personnage'])) {
            $personnage = $_SESSION['personnage'];
            echo '<div class="container result">';
            echo '<h2>Résultat de la présentation :</h2>';
            echo '<p>';
            $personnage->sePresenter();
            echo '</p>';
            echo '</div>';
            unset($_SESSION['personnage']);
        }
        ?>
    </div>
</body>
</html>
