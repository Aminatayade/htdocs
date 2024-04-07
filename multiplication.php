<html>
    <body>
        <?php
        $jmax=10;
        $imax=5;
        $idebut=1;
        $jdebut=1;
        echo "<table>";
        for($j=1;$j<=10;$j++){
            echo "<tr>";
            for($i=1;$i<=5;$i++){
                $produitIJ=$i*$j;
                echo "<td> | $i* $j: $produitIJ</td>";
            }
            echo "<td> | </td>";
            echo "</tr>";
        }
        echo "</table>";
        
        ?>
    </body>
</html>