<html>
    <body>
    <form action="connexion.php" method="post">
    <label for="Login">Votre nom</label>
    <input type="text" name="Login" id="Login" value="<?php if(isset($_REQUEST['Login'])) echo $_REQUEST['Login'];?>"><br><br>
    <label for="Motdepasse">Votre mot de passe</label>
    <input type="password" name="Motdepasse" id="Motdepasse"><br><br>
    <input type="submit" value="Se connecter">
</form>
    </body>
</html>

