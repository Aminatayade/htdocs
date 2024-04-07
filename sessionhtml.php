<!DOCTYPE html>
<html>
    <head><title>session nombre</title></head>
    <body>
        <form action="session.php">
            <input type="text" name="C" value="<?php echo $_SESSION["C"];?>">
            <input type="submit" value="continuer">
        </form>
    </body>
</html>