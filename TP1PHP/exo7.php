<?php
function connexion(){
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && isset($_POST['password'])){
        $login = $_REQUEST["login"];
        $password = $_REQUEST["password"];

        if($login == "admin" && $password == "passer"){
            echo "Soyez la bienvenue chez nous!";
        } else {
            // Affichage du message d'erreur avec le lien de retour (seul le mot de passe est inclus)
            $login = $_REQUEST["login"];
            echo '<p>Identifiants incorrects. Veuillez cliquer sur ce lien pour réessayer <a href="Formulaire7.php?message='.$login. '">Retour</a>.</p>';
        }
    }
    connexion();
}