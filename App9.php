
<?php
$tab1=array(
    "Doe"=>array(
        "prenom" => "John",
        "ville" => "Paris",
        "age" => 30
    ),
    "Smith" => array(
        "prenom" => "Alice",
        "ville" => "New York",
        "age" => 25
    ),
    "Garcia" => array(
        "prenom" => "Maria",
        "ville" => "Barcelone",
        "age" => 35
    )
);
$chaine="Bonjour tout le monde";
$tab=explode("\n",$chaine);
echo $tab[0];

// Accès aux données du tableau
echo "Nom: Doe, Prénom: " . $tab1["Doe"]["prenom"] . ", Ville: " . $tab1["Doe"]["ville"] . ", Âge: " . $tab1["Doe"]["age"] . "<br>";
echo "Nom: Smith, Prénom: " . $tab1["Smith"]["prenom"] . ", Ville: " . $tab1["Smith"]["ville"] . ", Âge: " . $tab1["Smith"]["age"] . "<br>";
echo "Nom: Garcia, Prénom: " . $tab1["Garcia"]["prenom"] . ", Ville: " . $tab1["Garcia"]["ville"] . ", Âge: " . $tab1["Garcia"]["age"] . "<br>";

    

?>