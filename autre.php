<html>
    <body>
    <?php function formulaire () { ?>
        <form action="autre.php">
        <INPUT TYPE=text NAME="nom"><br/>
        <INPUT TYPE=text NAME="age"><br/>
        <INPUT TYPE=submit VALUE="OK">
        </form>
        <?php }
 
        function traitement ($n, $a) {
            $message = "Bonjour".$n."Votre age est: ".$a;
            echo $message;
        }
        if(!isset($_REQUEST["nom"])) formulaire ();
        else traitement ($_REQUEST["nom"],$_REQUEST["age"]);
        ?>
    </body>
</html>