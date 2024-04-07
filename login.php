<html>
    <body>
        <?php
        $user1=  array("nom" => "Yade","prenom" => "aminata","login" => "admin","password" => "passer");
        $user2=  array("nom" => "Wade","prenom" => "Fatou","login" => "admin","password" => "passer");
        $user1=  array("nom" => "Diop","prenom" => "Oumou","login" => "admin","password" => "passer");

        function listerUser($user){
            echo "<table border='1'>";
            echo "<tr><th>Nom</th><th>Prenom</th><th>login</th><th>password</th></tr>";
            echo "</table>";
            foreach ($user as $users) {
                echo "<tr>";
                echo "<td>" . $user['nom'] . "</td>";
                echo "<td>" . $user['prenom'] . "</td>";
                echo "<td>" . $user['login'] . "</td>";
                echo "<td>" . $user['password'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        }
        $users=array($user1,$user2,$user3);
        listerUser($users);

        ?>
    </body>
</html>