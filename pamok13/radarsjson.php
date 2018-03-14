<?php
$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

$a = $dbh->query('SELECT * FROM radars')->fetchAll();

echo json_encode($a);

