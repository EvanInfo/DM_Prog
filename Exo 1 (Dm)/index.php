    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exo 1</title>
        <script src="verification.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">

</head>
    </head>
    <body>
        <form method="post" action="resultat.php" onsubmit="return validateDates()">
            <label for="date_debut">Date de début :</label>
            <input type="date" name="date_debut" id="date_debut" required>
            <br>
            <label for="date_fin">Date de fin :</label>
            <input type="date" name="date_fin" id="date_fin" required>
            <br>
            <input type="submit" value="Soumettre">
    </form>
    </body>
    </html>