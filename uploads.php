<!DOCTYPE html>
<html>
    <body>
        <?php
        //verify if the form is submitted
        if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_FILES["file"])){
            $file=$_FILES["file"];
            $file_name=$file["name"];
            $file_size=$file["size"];
            $file_tmp_name=$file["tmp_name"];
            echo "le nom du fichier est sur ".$file_name." </br>";
            echo "le nom du fichier est dans le repertoire temporaire est ".$file_tmp_name." </br>";
            echo "le taille du fichier est ".$file_size."octets";

            if(!$f=fopen("./note1.txt", "r")) die("problem opening  the file");
            while(!feof($f)){

                $ligne=fgets($f,255); echo $ligne."</br>";
            }
            fclose($f);

        }
        ?>
    </body>
</html>