<!DOCTYPE html>
<html>
<body>
    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        session_destroy();
    }

    function formulaire(){ ?>
        <form action="connexion.php" method="post"> <!-- Ajout de method="post" -->
            <label for="Login">Votre nom</label>
            <input type="text" name="Login" id="Login" value="<?php if(isset($_REQUEST['Login'])) echo $_REQUEST['Login'];?>"><br><br> <!-- Correction de la casse de 'Login' -->
            <label for="Motdepasse">Votre mot de passe</label>
            <input type="password" name="Motdepasse" id="Motdepasse"><br><br>
            <input type="submit" value="Se connecter">
        </form> <!-- Ajout de la balise de fermeture -->
    <?php }

    if(isset($_REQUEST['Login'])){
        $login=$_REQUEST['Login'];
        $motdepasse=$_REQUEST['Motdepasse'];
        if(($login!="admin") || ($motdepasse!="passer")){
            echo "Login ou mot de passe incorrect. Veuillez réessayer... <br>";
            formulaire();
        }
        else{
            $_SESSION['Login'] = $login; // Correction de l'attribution des valeurs de session
            $_SESSION['Motdepasse'] = $motdepasse; // Correction de l'attribution des valeurs de session
            header("Location: accueil.php");
        }
    }
    ?>
</body>
</html>
