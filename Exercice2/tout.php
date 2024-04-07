
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

<?php
function formulaire() { ?>
    <form action="./tout.php" method="post">
        Nom: <input type="text" name="nom" value="<?php if(isset($_POST['nom'])) echo $_REQUEST['nom']; ?>"><br>
        Age: <input type="text" name="age" ><br>
        <input type="submit" value="OK">
    </form>
<?php }

if (!isset($_POST["nom"]) || !isset($_POST["age"]) || empty($_POST["nom"]) || empty($_POST["age"])) {
    formulaire();
} else {
    traitement();
}

function traitement() {
    $n = $_REQUEST["nom"];
    $a = $_REQUEST["age"];

    if ($a < 20) {
        $message = "Bonjour " . $n . ", votre âge est " . $a . ".";
        echo $message;
    } else {
        echo "L'âge doit être strictement inférieur à 20.";
        formulaire();
    }
}
?>

</body>
</html>
