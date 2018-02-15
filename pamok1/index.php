<?php

$a = [[1, 4, 7, 6], [2, 3, 6], [3, 7, 3, 5 ,23]];
$ilgis1 = count($a);

for ($i = 0; $i < $ilgis1; $i++) {
    $max = $a[$i] [0];
    $ilgis2 = count ($a[$i]);

    for ($j = 0; $j < $ilgis2; $j++) {
        if ($max < $a[$i][$j]) {
            $max = $a[$i][$j];
        }
    }

    echo $max . '<br>';

}


