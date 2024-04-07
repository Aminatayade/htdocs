<html>
<body>
<?php
function selectionSort($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        list($arr[$i], $arr[$minIndex]) = array($arr[$minIndex], $arr[$i]);
    }
    
    return $arr;
}

// Exemple d'utilisation
$array = [64, 25, 12, 22, 11];
$result = selectionSort($array);
print_r($result);
?>
</body>
</html>