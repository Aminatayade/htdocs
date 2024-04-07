<?php
// Initialisation des variables
include 'encore1_action.php';
$nom = '';
$age = '';
$erreurAge = '';

// Validation des données après la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données soumises par l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $age = intval($_POST['age']); // Convertir l'âge en nombre entier

    // Validation des conditions
    if ($age < 0) {
        $erreurAge = 'L\'âge ne peut pas être négatif.';
    }

    // Si les conditions ne sont pas remplies, stockez le nom dans une variable
    if (!empty($erreurAge)) {
        // Le nom est stocké dans la variable $nom
    }
    else {
        echo "bienvenue votre nom est $nom vous avez $age ans";
        // Le nom est stocké dans la variable $nom
    }
}

// Génération du formulaire avec les valeurs stockées
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="post" action=" ">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" required><br>

        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" value="<?php echo $age; ?>" required>
        <span style="color: red;"><?php echo $erreurAge; ?></span><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
