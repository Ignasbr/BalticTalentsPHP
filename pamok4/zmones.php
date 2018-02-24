<?php
require('functions.php');

//$jonas =   [['Jonas', 'Jonaitis', 756586334234],
//            ['Tomas', 'Tomatis', 3658346346]];
//
//$tomas =   [['Karolis', 'Konaitis', 246586334234],
//            ['Lomas', 'Lomatis', 3458345634]];
//
//
//
//$jonas[] = $tomas[0];
//$jonas[] = $tomas[1];
//
//array_unshift($jonas, $tomas[0], $tomas[1]);
//
//unset($jonas[4], $jonas[5]);
//
//var_dump($jonas);


$zmones = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],
    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],
    '43303014126' => [
        'vardas' => 'Tomas',
        'pavarde' => 'Tomaitis',
        'gdata' => '1999-11-04'
    ],
    '37542555789' => [
        'vardas' => 'Karolis',
        'pavarde' => 'Karolaitis',
        'gdata' => '1983-04-06'
    ]
];

foreach($zmones as $key =>  $zmogus){
//    var_dump($key);
    if(((string)$key)[0] == 3){
        unset($zmones[$key]);
    }
};
phpinfo();