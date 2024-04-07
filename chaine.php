<!DOCTYPE html>
<html>
    <body>
        <?php
            $aminata = "Bonjour, je m'appelle Aminata.";
            $nata = "Aminata";

            $position = strpos($aminata, $nata);

            if ($position !== false) {
                echo "La sous-chaîne '$nata' a été trouvée à la position : $position";
            } else {
                echo "La sous-chaîne '$nata' n'a pas été trouvée dans la chaîne '$aminata'.";
            }
           echo  "<br></br>";
            echo date("Y-m-d H:i:s");
        ?>
    </body>
</html>
