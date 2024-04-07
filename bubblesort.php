<!DOCTYPE html>
<html>
    <body>
    <?php
function bubbleSort($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                list($arr[$j], $arr[$j + 1]) = array($arr[$j + 1], $arr[$j]);
            }
        }
    }
    
    return $arr;
}

// Exemple d'utilisation
$array = [64, 25, 12, 22, 11];
$result = bubbleSort($array);
print_r($result);
?>
</body>
</html>