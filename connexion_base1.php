<html>
    <body>
        <?php
        // Déclaration des variables non visibles pour les visiteurs
        $user = "root";
        $password = "";
        $db = "base1";
        $server = "localhost";
        
        // Etablissement de la connexion
        $conn = mysqli_connect($server, $user, $password, $db);
        
        // Vérification de la connexion
        if (!$conn) {
            echo "Erreur de connexion : " . mysqli_connect_error();
        } else {
            echo "Connexion établie avec succès";
            
            // Exécution de la requête SQL
            $query = "SELECT nom, prenom, age, dateheure FROM test ORDER BY nom";
            $result = mysqli_query($conn, $query);
            
            // Vérification du résultat de la requête
            if ($result) {
                echo "<table border='1'>";
                echo "<tr><th>Nom</th><th>Prénom</th><th>Age</th><th>Dateheure</th></tr>";
                // Traitement des données résultantes
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['prenom'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['dateheure'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Erreur lors de l'exécution de la requête : " . mysqli_error($conn);
            }
            
            // Fermeture de la connexion
            mysqli_close($conn);
        }
        ?>
    </body>
</html>
