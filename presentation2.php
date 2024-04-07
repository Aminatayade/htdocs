<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" type="text/css" href="presentation.css"></head>
    <body class=page1>
        <h1>Presention complet</h1>
        <?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $nom=$_REQUEST["nom"];
        $prenom=$_REQUEST["prenom"];
        $date_naissance=$_REQUEST["date_naissance"];
        $lieu_naissance=$_REQUEST["lieu_naissance"];
        $date_mariage=$_REQUEST["date_mariage"];
        $lieu_mariage=$_REQUEST["lieu_mariage"];
        $nom_du_mari=$_REQUEST["nom_du_mari"];
        $prenom_du_mari=$_REQUEST["prenom_du_mari"];
        echo "<p>Votre nom est : $nom</p>";
        echo "<p>Votre Prenom : $prenom</p>";
        echo "<p> Vous etes nee :$date_naissance</p>";
        echo "<p>a : $lieu_naissance</p>";
        echo "<p>Vous vous etes mariee le  : $date_mariage</p>";
        echo "<p>A : $lieu_mariage</p>";
        echo "<p>Avec : $nom_du_mari  $prenom_du_mari</p>";
        echo "<p> Heureux menage madame : $nom_du_mari</p>";



    }
    else{
        echo "<p>Erreur : Le formulaire n'a pas été soumis.</p>";
    }


        ?>
    </body>
</html>