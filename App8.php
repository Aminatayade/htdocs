
<?php
/*$x="bonjour";
$y="hellos";
$z=&$x;
$x="bonsoir";
$y=&$x;
echo $x;
echo $y;
echo $z;
$a=$c;
$c="occurence1";
echo $a;
$a=$c;
echo $a."<br>";
$c="occurence2";
echo $a;*/
$var=90;
/*function test(){
    global $var;
    $var=100;
    return  $var;
}
$result=test();//affiche rien il nya pas d'echo
//echo $result;
$x="PHP5";
$a[]=&$x;
$y="5eme version PHP";
$z=$y*10;
$x.=$y;
$y*=$z;
$a[0]="MySQL";
echo $a[0];
echo $y;
echo $z;
echo $x;
$v = "PHP5";
for ($i = 0; $i < strlen($v); $i++) {
    echo $v[$i]."<br>";
}*/
$tab= array(
    0=>   array(
        "nom"=> "diop",
        "prenom"=> "paul",
        "ville"=>"paris",
        "age"=> 23
      
    ),
    1=>   array(
        "nom"=> "lo",
        "prenom"=> "amina",
        "ville"=>"paris",
        "age"=> 12

    ),
    2=>array(
        "nom"=>"diop",
        "prenom"=>"modou",
        "ville"=>"Dakar",
        "age"=>25
    )
    


    );
echo "Nom: " . $tab[0]["nom"] . ", Prénom: " . $tab[0]["prenom"] . ", Ville: " . $tab[0]["ville"] . ", Âge: " . $tab[0]["age"] . "<br>";
echo "Nom: " . $tab[1]["nom"] . ", Prénom: " . $tab[1]["prenom"] . ", Ville: " . $tab[1]["ville"] . ", Âge: " . $tab[1]["age"] . "<br>";
echo "Nom: " . $tab[2]["nom"] . ", Prénom: " . $tab[2]["prenom"] . ", Ville: " . $tab[2]["ville"] . ", Âge: " . $tab[2]["age"] . "<br>";
?>