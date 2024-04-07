<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        $email=$_REQUEST["email"];
      //  $sexe=$_REQUEST["sexe"];
       $sexe = isset($_POST["sexe"]) ? htmlspecialchars($_POST["sexe"]):"feminin" ;
        $message= "bonjour votre email est " .$email. "vous etes de sexe " .$sexe;
        echo $message;
        ?>
    </body>
</html>