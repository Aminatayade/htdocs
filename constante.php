<htm>
<body>
<?php
define("ma_constante","hello_world");
if(defined("ma_constante")){
    echo "la constante est :".ma_constante."<br>";
}
$tableau[0]=1;
$tableau[1]=2;
//$tableau[][]=45;
echo $tableau[0]."<br>";
echo $tableau[1]."<br>";
//echo $tableau[0][0];
$tableau1[]=array("rouge"=>"red","bleu"=>"blue");
foreach($tableau1 as $couleur){
    foreach($couleur as $valeur){
        echo $valeur."<br>";
    }
}
//echo $tableau1[];
?>
</body>
</htm>