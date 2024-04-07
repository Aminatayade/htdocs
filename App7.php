<html>
    <body>
    <?php
           
           if(isset($_SERVER["REQUEST_METHOD"])=="POST" && isset($_POST['password']) && isset($_POST['$password'])){
                   $login=$_REQUEST["login"];
                   $password=$_REQUEST["password"];
                   if($login=="login" && $password=="password"){
                       echo"Vous etes connecte";

                   }
                   else{
                       echo "Identifiants incorrects. Veuillez cliquer sur ce lien pour réessayer <a href='App6.php?message=".$login."'>Retour</a>.";
                   }
                  
           }

    ?>
     
            
    </body>
</html>

          