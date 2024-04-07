<?php
define('MAX', 5);

session_start();

if (!isset($_SESSION["C"])) {
    $_SESSION["C"] = 1;
    $_SESSION["T"] = time();
} else {
    $_SESSION["C"]++;
}

if (time() - $_SESSION["T"] > MAX) {
    session_destroy();
    die("Trop tard.");
} else {
    $_SESSION["T"] = time();
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom =$_POST["nom"];
    echo "Bonjour, $nom ! Vous êtes venu(e) ".$_SESSION["C"]." fois.";
}
?>

<!DOCTYPE html>
<html>

<body>
    <form action="session.php" method="post">
        <p>Vous êtes venus <?php echo $_SESSION["C"]; ?> fois.</p>
        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        Cliquez sur <input type="submit" value="continuer">
    </form>
</body>

</html>
