
<?php
$nombre=20;
$somme=0;
for($i=0;$i<$nombre;$i++){
    $somme+=$i;
}
while($i<$nombre){
    $somme+=$i;
    $i++;
}
echo $somme;
?>