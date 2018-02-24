<?php

function vidurkiuSkirtumas($a, $b) {

    $aLenght = count($a);
    $bLenght = count($b);

    $aVidurkis = array_sum($a) / $aLenght;
    $bVidurkis = array_sum($b) / $bLenght;

    $vidurkis = $aVidurkis - $bVidurkis;

    return 'Dvieju array vidurkiu skirtumas yra: ' .  $vidurkis;

}