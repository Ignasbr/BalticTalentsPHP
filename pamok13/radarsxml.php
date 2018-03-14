<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

$radars = $dbh->query('SELECT * FROM radars')->fetchAll();

function radarsXml(array $radars)
{
    $doc = new DOMDocument();
    $doc->formatOutput = true;
    $root = $doc->createElement('radars');

    foreach ($radars as $radarsInfo) {
        $info = $doc->createElement('info');
        $info->appendChild($doc->createElement('id', $radarsInfo['id']));
        $info->appendChild($doc->createElement('date', $radarsInfo['date']));
        $info->appendChild($doc->createElement('number', $radarsInfo['number']));
        $info->appendChild($doc->createElement('distance', $radarsInfo['distance']));
        $info->appendChild($doc->createElement('time', $radarsInfo['time']));
        $info->appendChild($doc->createElement('driverid', $radarsInfo['driverid']));

        $root->appendChild($info);
    }

    $doc->appendChild($root);
    return $doc->saveXML();

}

echo radarsXml($radars);