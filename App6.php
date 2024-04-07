<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="App7.php">
            login<input type=text name="login" required value="<?php if(isset($_REQUEST['login'])) echo $_REQUEST['login'];?>"><br></br>
            password<input type=password name="password" required> <br></br>
            <input type="submit" value="Valider">
            
        </form>
    </body>
</html>