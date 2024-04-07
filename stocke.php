<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement de la recherche de motif
    if (isset($_POST['motif'])) {
        $motifRecherche = $_POST['motif'];
        echo "<br/><strong>Résultats de la recherche pour le motif '$motifRecherche' :</strong><br/>";
        
        // Réouverture du fichier pour la recherche
        $cheminFichier = "./PHP.txt";
        if (!$f = fopen($cheminFichier, "r")) {
            die("Problème d'ouverture du fichier!!!");
        }

        echo "<div class='search-results'>";
        while (!feof($f)) {
            $ligne = fgets($f, 255);
            if (strpos($ligne, $motifRecherche) !== false) {
                // Appliquer un style CSS pour colorier le mot recherché
                $ligne = str_replace($motifRecherche, "<span class='highlight'>$motifRecherche</span>", $ligne);
                echo $ligne, "<br/>";
            }
        }
        echo "</div>";
        fclose($f);
    }

    // Traitement de l'envoi de fichier
    if (isset($_FILES["nomFichier"])) {
        $dossier = "mondossier/"; // Ajoutez un séparateur de répertoire
        $cheminFichier = $dossier . $_FILES["nomFichier"]["name"]; // Utilisez le nom d'origine du fichier

        // Copie du fichier téléchargé vers le dossier spécifié
        if (move_uploaded_file($_FILES["nomFichier"]["tmp_name"], $cheminFichier)) {
            echo "Le fichier a été téléchargé avec succès.<br/><br/>";
            echo "Fichier original : ".$_FILES["nomFichier"]["name"]."<br/>";
            echo "Fichier temporaire : ".$_FILES["nomFichier"]["tmp_name"]."<br/>";
            echo "Taille du fichier : ".$_FILES["nomFichier"]["size"]." octets <br/><br/>";
        } else {
            echo "Problème lors du téléchargement du fichier.";
        }
    }
}
?>

<!-- Ajout de la feuille de style -->
<style>
    .highlight {
        background-color: yellow; /* Couleur de surlignage */
        font-weight: bold; /* Texte en gras */
    }

    .search-results {
        background-color: #f8f8f8; /* Couleur de fond pour les résultats de recherche */
        padding: 10px; /* Espacement intérieur */
    }
</style>
