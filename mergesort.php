<html>
<body>
    <?php
function mergeSort($arr) {
    $n = count($arr);

    if ($n <= 1) {
        return $arr;
    }

    $mid = (int)($n / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = array();
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Exemple d'utilisation
$array = [64, 25, 12, 22, 11];
$result = mergeSort($array);
print_r($result);
?>
</body>
</html>