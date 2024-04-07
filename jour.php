<!DOCTYPE html>
<html>
<body>
<?php
$tableau = array(
    'jour1' => 'Lundi',
    'jour2' => 'Mardi',
    'jour3' => 'Mercredi',
    'jour4' => 'Jeudi',
    'jour5' => 'Vendredi',
    'jour6' => 'Samedi',
    'jour7' => 'Dimanche'
);

//foreach($tableau as $jour => $valeur){
  //  echo $jour . ': ' . $valeur . "<br>";
//}
afficherTableau($tableau);
function afficherTableau($tab){
    if(is_array($tab)){
        foreach($tab as $jour => $valeur){
            echo $jour. ': '. $valeur. "<br>";
        }

    }
    else {
        echo "le tableau n'est pas un tableau";
    }
}
$t[0]=1;
$t[1]=3;
$t[2]=5;
afficherTableau($t);
function afficherSommme($tab){
    $somme=0;
    if(is_array($tab)){
        foreach($tab as $jour => $valeur){
            echo $valeur. "<br>";
            $somme += $valeur;

        }
        echo "la somme est $somme";
    }
    else {
        echo "le tableau n'est pas un tableau";
    }
}

?>
</body>
</html>
