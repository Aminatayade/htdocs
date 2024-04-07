<?php
// Initialisation des variables
$nom = '';
$email = '';
$erreurNom = '';
$erreurEmail = '';

// Validation des données après la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données soumises par l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);

    // Validation des conditions
    if (empty($nom)) {
        $erreurNom = 'Le champ nom est obligatoire.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurEmail = 'L\'adresse e-mail n\'est pas valide.';
    }

    // Si les conditions ne sont pas remplies, stockez les valeurs dans des variables
    if (!empty($erreurNom) || !empty($erreurEmail)) {
        // Les valeurs sont stockées dans les variables $nom et $email
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
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>">
        <span style="color: red;"><?php echo $erreurNom; ?></span><br>

        <label for="email">E-mail :</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $erreurEmail; ?></span><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
