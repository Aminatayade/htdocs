<!DOCTYPE html>
<html>
<head>
    <title>Calcul sur les variables</title>
</head>
<body>
    <h1>Calcul sur les variables</h1>

    <?php
    // Si les valeurs sont passées dans l'URL
    if(isset($_GET['prixAchat']) && isset($_GET['frais'])) {
        // Récupérer les valeurs depuis l'URL
        $prixAchat = $_GET['prixAchat'];
        $frais = $_GET['frais'];
    } else {
        // Valeurs par défaut
        $prixAchat = 20000;
        $frais = 7500;
    }

    // Calculer le prix de vente
    $prixVente = $prixAchat + $frais;
    
    // Afficher le prix de vente
    echo "<p>Le prix de vente est : $prixVente</p>";
    ?>
</body>
</html>
