<html>
<body>
<?php
function quickSort($arr) {
    $n = count($arr);
    
    if ($n <= 1) {
        return $arr;
    }

    $pivot = $arr[0];
    $left = $right = array();

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), array($pivot), quickSort($right));
}

// Exemple d'utilisation
$array = [64, 25, 12, 22, 11];
$result = quickSort($array);
print_r($result);
?>
</body>
</html>