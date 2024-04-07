<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de présentation</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $lieu_naissance = $_POST['lieu_naissance'];

    echo "<h1>Résumé de la présentation</h1>";
    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Date de naissance : $date_naissance</p>";
    echo "<p>Lieu de naissance : $lieu_naissance</p>";
} else {
    // Affichage du formulaire
?>

<h1>Formulaire de présentation</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>
    
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    
    <label for="date_naissance">Date de naissance :</label>
    <input type="date" id="date_naissance" name="date_naissance" required><br><br>
    
    <label for="lieu_naissance">Lieu de naissance :</label>
    <input type="text" id="lieu_naissance" name="lieu_naissance" required><br><br>
    
    <input type="submit" value="Envoyer">
</form>

<?php
}
?>

</body>
</html>
