<html>
<body>
<?php
// Declaration de la fonction du nom de insertionSort qui prend en parametre la variable particuliere $arr
function insertionSort($arr) {
    // La variable $n recupere la taille du tableau contenu dans la variable $arr
    $n = count($arr);
    // On entre dans la boucle for 
    for ($i = 1; $i < $n; $i++) {
        // La variable $key recupere la valeur de l'element d'indice i du tableau 
        $key = $arr[$i];
        //La variable $j recupere la valeur de la variable $i diminuee de 1
        $j = $i - 1;

    /* On entre dans la boucle while imbriquee dans la boucle for pour commencer le tri par insertion
    Pour entrer dans la boucle while, il faut que la valeur de $j soit positive ou nulle et que l'element
    du tableau qui a comme indexe $j=$i-1 soit superieure strictement a la valeur stockee dans la variable $key=$arr[i] */
        while ($j >= 0 && $arr[$j] > $key) {
          
    // Ici, comme la variable $arr[$i] etait videe , on la reutilise pour y stocker l'element du tableau d'indice egal la valeur dans $j
            $arr[$j + 1] = $arr[$j];
    // La valeur de la variable j diminue d'une unite
            $j--;
        }
    /* On est sorti de la boucle while si toutefois au moins une des deux conditions dans while n'est pas verifiee
    mais on reste toujours dans la boucle for*/

    // Ici, on stocke la valeur de la variable $key dans le tableau precisement a l'indice $j+1
        $arr[$j + 1] = $key;
    }
    // Enfin on est sorti de la boucle for apres avoir parcouru le tableau
    
    // La fonction retourne le tableau trie 
    return $arr;
}

// Exemple d'utilisation

//declaration explicite d'un tableau contenant 5 elements
$array = [64, 25, 12, 22, 11];
// Appel de la fonction  
$result = insertionSort($array);
// Affichage de maniere brute du tableau 
print_r($result);
?>
</body>
</html>
