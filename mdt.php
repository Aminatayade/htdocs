<html>
    <body>
        <?php
function genererMotDePasse() {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $longueur = 8;
    $motDePasse = '';

    // Générer un mot de passe avec une longueur minimale de 8 caractères
    while(strlen($motDePasse) < 8) {
        $motDePasse = '';
        for ($i = 0; $i < $longueur; $i++) {
            $motDePasse .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    }

    return $motDePasse;
}

// Appel de la fonction pour générer un mot de passe
$motDePasse = genererMotDePasse();
echo $motDePasse;
?>
</body>
</html>