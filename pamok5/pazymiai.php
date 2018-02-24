<?php

$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => [
        'lietuviu' => [4, 8, 6, 7], 'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]]],
    ['vardas' => 'Ona', 'pazymiai' => [
        'lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]

];

foreach($mokiniai as $mokinys) {

}

$lietuviuVidJonas = array_sum($mokiniai[0]['pazymiai']['lietuviu']) / 2;
$matematikaVidJonas = array_sum($mokiniai[0]['pazymiai']['matematika']) / 2;
$lietuviuVidOna = array_sum($mokiniai[1]['pazymiai']['lietuviu']) / 2;
$matematikaVidOna = array_sum($mokiniai[1]['pazymiai']['matematika']) / 2;

$vidurkisJonas = $lietuviuVidJonas + $matematikaVidJonas / 2 ;
$vidurkisOna = $lietuviuVidOna + $matematikaVidOna / 2 ;


echo 'Vardas: ' . ($mokiniai[0]['vardas']) . '<br>' .
    'Lietuviu pazymiai: ' . implode(',', $mokiniai[0]['pazymiai']['lietuviu']) . ' ' . 'Vidurkis: ' . $lietuviuVidJonas . '<br>' .
    'Matematikos pazymiai: ' . implode(',', $mokiniai[0]['pazymiai']['matematika']) . ' ' . 'Vidurkis: ' . $matematikaVidJonas . '<br>' .
    'Vardas: ' . ($mokiniai[1]['vardas']) . '<br>' .
    'Lietuviu pazymiai: ' . implode(',', $mokiniai[1]['pazymiai']['lietuviu']) . ' ' . 'Vidurkis: ' . $lietuviuVidOna . '<br>' .
    'Matematikos pazymiai: ' . implode(',', $mokiniai[1]['pazymiai']['matematika']) . ' ' . 'Vidurkis: ' . $matematikaVidOna . '<br>' .
    'Bendras ' .  ($mokiniai[0]['vardas']) . ' ' .  'vidurkis: '  . $vidurkisJonas . '<br>' .
    'Bendras ' .  ($mokiniai[1]['vardas']) . ' ' .  'vidurkis: '  . $vidurkisOna . '<br>';