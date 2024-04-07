<!DOCTYPE html>
<html>
    <head> 
       <title> fontion php</title> 
    </head>
    <body>
        <?php
        /*function bonjour()
        {
            echo "bonjour a tous" . '</ br>';
        }
        bonjour() .'</ br>';
        function bonjourUtilisateur($prenom,$age){
            echo 'bonjour ' .$prenom. ' vous avez ' .$age. ' ans .</ br>';
        }
        bonjourUtilisateur('pierre', '18');*/
        function direBonjour(){
            return "bonjour";}

        function direbonsoir(){
            echo "bonsoir";
        }
        $bonjour=direBonjour();
        $bonsoir= direbonsoir();
        echo $bonjour;
        echo $bonsoir;
        //il faut de preference utiliser return que echo dans la fonction car echo on a pas de control
        ?>
    </body>
</html>
