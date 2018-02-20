<?php

function pasisveikinam($name, $surname)
{

    echo 'Sveiki ' . $name . ' ' . $surname . '!' . '<br>';

}

function masyvoVidurkis($masyvas)
{

    $dalyba = count($masyvas);

    $suma = array_sum($masyvas);

    $vidurkis = $suma / $dalyba;

    echo $vidurkis;

}

function info($zmones)
{

    foreach ($zmones as $zmogus) {

        echo $zmogus['vardas'] . ' ' . $zmogus['pavarde'] . ' ' . $zmogus['email'] . '<br>';
    }
}

function pasisveikinamInfo($zmones)
{

    foreach ($zmones as $zmogus) {

        pasisveikinam($zmogus['vardas'], $zmogus['pavarde']);

    }
}

function faktorialas($n) {
    if ($n === 1) {
        return 1;
    }
    else {
        return $n * faktorialas($n-1);
    }
}