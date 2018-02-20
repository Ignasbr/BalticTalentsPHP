<?php

$array = [
    20 => [10, 46, 29],
    48 => [1, 45, 2],
    32 => [10, 10, 29],
    93 => [50, 42, 1],
    4 => [1, 0, 3]
];

foreach ($array as $key => $item) {


    if ($item[0] + $item[1] + $item[2] === $key) {

        echo 'array sum = ' . $key . '<br>' ;

    } else {

        echo 'neteisinga ' . '<br>';

    };

}