<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résumé de la présentation</title>
</head>
<body>
    <h1>Résumé de la présentation</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_naissance = $_POST['date_naissance'];
        $lieu_naissance = $_POST['lieu_naissance'];

        echo "<p>Nom : $nom</p>";
        echo "<p>Prénom : $prenom</p>";
        echo "<p>Date de naissance : $date_naissance</p>";
        echo "<p>Lieu de naissance : $lieu_naissance</p>";
    } else {
        echo "<p>Erreur : Le formulaire n'a pas été soumis.</p>";
    }
    ?>
</body>
</html>
