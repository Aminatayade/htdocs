<html>
<head>
    <title>Bienvenue</title>
</head>
<body>

<?php
/*
// Vérifier si le cookie existe
if(isset($_COOKIE['nom_visiteur'])) {
    $nom = $_COOKIE['nom_visiteur'];
    echo "<p>Bienvenue de retour, $nom !</p>";
} else {
    // Si le cookie n'existe pas, afficher le formulaire de demande de nom
    if(isset($_POST['nom'])) {
        // Si le formulaire a été soumis, stocker le nom dans un cookie
        $nom = $_POST['nom'];
        setcookie('nom_visiteur', $nom, 0, '/');
        echo "<p>Merci, $nom, pour votre visite !</p>";
    } else {
        // Si le formulaire n'a pas été soumis, afficher le formulaire
        echo "<form method='post' action=''>
                <label for='nom'>Entrez votre nom :</label>
                <input type='text' name='nom' id='nom'>
                <input type='submit' value='Envoyer'>
              </form>";
    }
}
*/

// Vérifier si le cookie existe
if(isset($_COOKIE['nom_visiteur'])) {
    $nom = $_COOKIE['nom_visiteur'];
    echo "<p>Bienvenue de retour, $nom !</p>";
} else {
    // Si le cookie n'existe pas, afficher le formulaire de demande de nom
    if(isset($_POST['nom'])) {
        // Si le formulaire a été soumis, stocker le nom dans un cookie
        $nom = $_POST['nom'];
        // Définir une expiration pour le cookie (une semaine à partir de maintenant)
        $expiration = time() + (7 * 24 * 60 * 60); // une semaine = 7 jours * 24 heures * 60 minutes * 60 secondes
        setcookie('nom_visiteur', $nom, $expiration, '/');
        echo "<p>Merci, $nom, pour votre visite !</p>";
    } else {
        // Si le formulaire n'a pas été soumis, afficher le formulaire
        echo "<form method='post' action=''>
                <label for='nom'>Entrez votre nom :</label>
                <input type='text' name='nom' id='nom'>
                <input type='submit' value='Envoyer'>
              </form>";
    }
}
?>



</body>
</html>
