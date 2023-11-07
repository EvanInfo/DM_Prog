<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire de commande</title>
  </head>
  <body>
    <h1>Formulaire de commande</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required><br><br>
      <label for="adresse">Adresse :</label>
      <textarea name="adresse" id="adresse" required></textarea><br><br>
      <label for="produit">Produit :</label>
     <input type="text" name="produit" id="produit" required><br><br>
      <label for="prix">Prix :</label>
      <input type="number" name="prix" id="prix" required><br><br>
      <input type="submit" value="Envoyer">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST["nom"];
        $adresse = $_POST["adresse"];
        $produit = $_POST["produit"];
        $prix = $_POST["prix"];

        $fichier = fopen("texte.txt", "w");

        fwrite($fichier, "Nom :" . $nom. "\n");
        fwrite($fichier, "Adresse :" . $adresse. "\n");
        fwrite($fichier, "Produit:" . $produit. "\n");
        fwrite($fichier, "Prix :" . $prix. "\n");

        fclose($fichier);

        $copie = "texte.txt";
        $destination = "sauvegarde/";

        $nomDate = date("Y-m-d_H-i-s");
        $sauvegarde= $destination . "fichier_du_" . $nomDate . ".txt";

        if (copy($copie, $sauvegarde)) {
            echo "Copie réussie";
        } else {
            echo "La copie du fichier a échoué.";
        }
    }
    ?>
  </body>
</html>