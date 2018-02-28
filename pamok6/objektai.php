<?php
//
//require 'Gyvunas.php';
//require 'Suo.php';
//
//$rudas = new Suo(100, 1.50, 'Ruda', 'M');
//
//echo $rudas->sunelis();


require_once 'Ivykis.php';
require_once 'Istorija.php';

$ivykis = new Ivykis('PHP Kaunas', new\DateTime('2018-02-19'));

$istorija = new Istorija(
    "ziema",  [new Ivykis('Kaledos', new \DateTime('2018-04-23'))]
);


    foreach ($istorija->ivykiai as $ivykis) {
        echo $ivykis->timeAgo()->days . '<br>';

    }
