<?php
require 'Radar.php';

$automobiliai = [new Radar(new \DateTime('2016-04-23'), 'HNR-843', 300, 4),
                new Radar(new \DateTime('2018-01-29'), 'BBA-335', 3200, 40),
                new Radar(new \DateTime('2017-09-15'), 'ADC-525', 700, 9),
                new Radar(new \DateTime('2017-05-21'), 'GDA-593', 1220, 20),
                new Radar(new \DateTime('2017-08-30'), 'HUE-650', 70, 3),
                new Radar(new \DateTime('2017-11-13'), 'NOR-499', 4000, 25)];


usort($automobiliai, function (Radar $auto1, Radar $auto2) {

    return $auto1->getDate() <=> $auto2->getDate();

});

foreach ($automobiliai as $automobilis) {

    echo $automobilis->getInfo();

}

usort($automobiliai, function (Radar $auto1, Radar $auto2) {

    return $auto1->getGreitis() <=> $auto2->getGreitis();

});

foreach ($automobiliai as $automobilis) {

    echo $automobilis->greitis();

}