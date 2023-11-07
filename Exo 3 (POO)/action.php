<?php
session_start();
require_once 'class/homme.class.php';
require_once 'class/femme.class.php';

$personnage = null;

if (isset($_POST['submit'])){
    $sexe = $_POST['sexe'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    if ($sexe === "homme") {
        $personnage = new Homme($prenom, $age);
    } elseif ($sexe === "femme") {
        $personnage = new Femme($prenom, $age);
    }

    $_SESSION['personnage'] = $personnage;
    header('Location: index.php'); // Redirige vers la page principale pour afficher le résultat.
}
?>