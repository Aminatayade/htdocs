<html>
    <body>

        <?php
        $ip = $_SERVER['REMOTE_ADDR'];//donne les info sur notre serveur 
        echo "Adresse IP : $ip <br>";
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        echo "User Agent : $user_agent <br>";
        $cheminabsolue=$_SERVER['DOCUMENT_ROOT'];
        echo "Chemin absolue : $cheminabsolue <br>";
        $cheminrelatif=$_SERVER['PHP_SELF'];
        echo "Chemin relatif : $cheminrelatif <br>";
        $chemin_absolue=$_SERVER['SCRIPT_FILENAME'];
        echo "Chemin absolue : $chemin_absolue <br>";
        ?>
    </body>
</html>
