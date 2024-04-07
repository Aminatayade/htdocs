<!DOCTYPE html>
<html>
    <head><title>formulaire</title></head>
    <body>
        <form method="post" action="exo7.php">
            login <input type ="text" name="login" require value="<?php if (isset($_Request["login"])) echo $_Request['message'];?>" >
</br>
            password <input type="text" name="password" require >
</br>
            <input type="submit" value="Valider">
        </form>
    </body>

</html>