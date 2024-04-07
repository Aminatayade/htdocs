<!DOCTYPE html>
<html>
    <head>
        <title>les tableaux</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php

        $prenoms= array('paul','amina','ouz');
//tableau associatif
       /* $age=array(

        'paul' =>23,'amina'=>12,'ouz'=> 'non renseigne');
        echo $prenoms[0].'</br>';
        echo $age['paul'].'</br>';
        for ($i= 0; $i<=2; $i++)
        {
            echo $prenoms[$i].'</br>';
            
        }
        foreach ($prenoms as $items )
        {
            echo $items.'</br>';
        }
        foreach ($age as $valeurs )
        {
            echo $valeurs.'</br>';
        }
        foreach ($age as $key => $valeurs )
        {
            echo 'l\'age de ' .$key. ' est ' .$valeurs. '.</br>';
        }
        //pour le debogage
        echo '<pre>';
        print_r($age); //on peut mettre du html pour une affichage claire
        echo '</pre>';*/
        //tableau multidimentionnel
        $membres=array (
            array('pierre',17,'pierrediop@gmail.com') , array('paul',18,'paulaxel@gmailcom') , array('ouz',19,'ouz@gmail.com')
        );
 
        echo $membres[0][0].' a '.$membres[0][1]. ' ans . son mail est '.$membres[0][2] . '.</br>' ;
        for($ligne=0;$ligne<=2;$ligne++){
            $membres_no=$ligne+1;
            echo 'membre numero' .$membres_no. '</br>';
            echo '<ul>';
            for ($col=0; $col <=2 ; $col++) { 
                echo '<li>' .$membres[$ligne][$col].  '</li>' ;
                # code...
            }  
            echo '</ul>';

        }
        ?>
    </body>
</html>