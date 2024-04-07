<html>
    <body>
<?php

$code = $_GET["code"];
$nom = $_GET["nom"];
$url = $_GET["url"];
$description = $_GET['description'];

$con = mysqli_connect('localhost', 'passepartout', 'dutinfo2024', 'mes_sites');

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

$req = mysqli_query($con, "INSERT INTO sites (code, nom, url, description) VALUES ('$code', '$nom', '$url', '$description')");

// Vérifier si la requête a été exécutée avec succès
if ($req) {
    echo "Insertion réussie !";
} else {
    echo "Erreur lors de l'insertion : " . mysqli_error($con);
}

// Fermer la connexion
mysqli_close($con);

?>
    </body>
</html>