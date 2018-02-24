<?php

require 'Automobilis.php';
require 'Krovininis.php';

$automobiliai = [new Krovininis('Audi', '100', 1000),
                new Krovininis('BMW', '3 series', 2000),
                new Krovininis('Opel', 'Omega', 2500 )];

?>

<html>
<body>
<table>
    <tr>Marke</tr>
    <tr>Svoris</tr>
    <?php foreach ($automobiliai as $automobilis){ ?>
            <tr>
                <td>
                    <?= $automobilis->pilnasAuto() ?>
                </td>
                <td>
                    <?= $automobilis->svoris ?>
                </td>
            </tr>
    <?php } ?>
</table>
</body>
</html>