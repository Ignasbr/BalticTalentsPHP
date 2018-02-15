<?php

$a = [[3, 4, 5], [2, 10, 8], [2, 6, 5], [5, 5, 5]];

foreach ($a as $trk) {

    $info = 'Tai ne trikampis ';
    $tipas = '-';
    $plotas = '';

    if ($trk[0] + $trk[1] > $trk[2] && $trk[1] + $trk[2] > $trk[0] && $trk[0] + $trk[2] > $trk[1]) {

        $info = 'Tai yra trikampis ';

        $abc = $trk[0] + $trk[1] + $trk[2];
        $p = $abc / 2;
        $plotas = sqrt(($p * ($p - $trk[0])) * ($p * ($p - $trk[1])) * ($p * ($p - $trk[2])));


        if ($trk[0] === $trk1[1] && $trk[2] === $trk[1] && $trk[0] === $trk[2]) {

            $tipas = 'lygiagrastis';

        } elseif ($trk[0] === $trk1[1] || $trk[2] === $trk[1] || $trk[0] === $trk[2]) {

            $tipas = 'lygiasonis';

        } else {

            $tipas = 'ivairiakrastis';
        }

        echo $info . 'kurio tipas yra ' . $tipas . 'ir jo plotas yra ' . round($plotas, 2) . ' cm.' . '<br>';

    } else {

        echo $info . '<br>';
    }


}