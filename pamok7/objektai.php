<?php
require 'Radar.php';

$automobiliai = [new Radar(new \DateTime('2016-04-23'), 'HNR-843', 100000, 70),
                new Radar(new \DateTime('2018-01-29'), 'BBA-335', 320000, 400),
                new Radar(new \DateTime('2017-09-15'), 'ADC-525', 7043000, 9030),
                new Radar(new \DateTime('2017-05-21'), 'GDA-593', 1224330, 2033),
                new Radar(new \DateTime('2017-08-30'), 'HUE-650', 7004340, 3434),
                new Radar(new \DateTime('2017-11-13'), 'NOR-499', 4000433, 2530)];


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