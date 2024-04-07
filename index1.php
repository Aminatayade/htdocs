<html>
    <body>

    
<?php
$user="php_user";
$password="passer";
$server="localhost";
$bd="tp_php";
//connexion procedural
$connexion = mysqli_connect($server,$user,$password,$bd);
//en utilisant la methode objet msqli
//$connexion=new  msqli($server,$user,$password,$bd);
if(!$connexion){
    die("Impossible de se connecter à la base de donnée" );
}
else{
    echo "connexion réussie";

$requete1="select * from utilisateur";
$resultat1=mysqli_query($connexion,$requete1);
while($donnees=mysqli_fetch_assoc($resultat1)){
    echo "ID :".$donnees['id']."<br>";
    echo "Nom :".$donnees['Nom']."<br>";
    echo "Prenom :".$donnees['Prenom']."<br>";
    echo " PASSWORD :".$donnees['Password']."<br>";
}
}
?>
</body>

</html>

