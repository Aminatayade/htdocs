<!DOCTYPE html>
<html>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['Login'])){
            echo "Bienvenue a vous ! <br>";
            echo "<b>".$_SESSION['Login']."</b> <br>";
            ?>

            <input type="submit" value = "Cliquer ici pour vous Déconnecter" onclick="location.href='deconnexion.php'">
            <?php
        }
        else{
            header("Location: connexion.php");
        }
        

        ?>
    </body>
</html>