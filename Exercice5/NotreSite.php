<html>
<head>
    <title>Liens</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Code</th>
            <th>Nom du site</th>
            <th>URL</th>
            <th>Description</th>
        </tr>
        <?php
        // Déclaration des paramètres de connexion
        $host = "localhost";
        $user = "passepartout";
        $bdd = "mes_sites";
        $passwd = "dutinfo2024";

        // Connexion au serveur avec MySQLi
        $mysqli = new mysqli($host, $user, $passwd, $bdd);

        // Vérification de la connexion
        if ($mysqli->connect_error) {
            die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
        }

        // Requête SQL
        $query = "SELECT code, nom, url, description FROM site ORDER BY nom";

        // Exécution de la requête
        $result = $mysqli->query($query);

        // Vérification des erreurs
        if (!$result) {
            die("Erreur dans la requête: " . $mysqli->error);
        }

        // Affichage des résultats
        while ($row = $result->fetch_assoc()) {
            $Code = $row['code'];
            $Nom = $row['nom'];
            $Url = $row['url'];
            $Description = $row['description'];

            echo "<tr>\n";
            echo "<td>$Code</td>\n";
            echo "<td><a href=\"$Url\">$Nom</a></td>\n";
            echo "<td>$Url</td>\n";
            echo "<td>$Description</td>\n";
            echo "</tr>\n";
        }

        // Fermeture de la connexion
        $mysqli->close();
        ?>
    </table>
</body>
</html>
