<!DOCTYPE html>
<head>
    <title>
        fonction string php
    </title>
    <body>
        <?php
        //echo strlen("bonjour a tous") ;
       // echo str_word_count("bonjour a tous"). '</br>';
       // echo str_repeat("bonjour </br>" ,7);
       $texte="bonjour amina tu vas bien?";
       echo str_replace("bonjour", "bonsoir",$texte,$i);//sensible a la casse
       echo '</br> nombre de remplacements :'.$i ;
       $minmaj= "Bonjour Vous allEZ BIEn ? </br>";
       echo strtolower($minmaj);
       echo strtoupper($minmaj);
       echo strpos("bonjour","o").'</br>';
       echo strpos("bonjour a tous", "tous").'</br>';
       echo strpos("ecole ","e").'</br>';
        ?>
    </body>
</head>