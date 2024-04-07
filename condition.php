<!DOCTYPE html>
<html>
    <head>
        

    </head>
    <body>
        <?php
        $heure_connexion=20;
        if($heure_connexion<18)
        {
        echo"passer une bonne journee il est ".'<br/>' ;
            $journee="oui";
        }
    else  
       { 
        echo"bonne soiree".'<br/>';
           $journee= "non";

       }
    echo 'fait-il jour? la reponse est ' .$journee. '.'.'<br/>';
    $note=12;
    if($note< 10)
    {
        echo "vous n'avez pas eu la moyenne".'<br/>';
    }
    else if($note>10)
    {
        echo "vous avez eu la moyenne".'<br/>';
    }
    else{
        echo "erreur".'<br/>';
    }

        ?>
    </body>
</html>