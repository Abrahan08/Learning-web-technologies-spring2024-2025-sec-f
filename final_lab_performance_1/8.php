<?php

$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];


echo "\nShape 1:\n";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}


echo $array[2][0] . "\n";


echo "\nShape 2:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if (is_string($array[$i][$j])) {
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n";
}
?>
