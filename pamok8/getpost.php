<?php

$skaicius1 = $_GET['skaicius1'];
$skaicius2 = $_GET['skaicius2'];

//echo $skaicius1 * $skaicius2;

if(isset($_REQUEST['skaicius1']) && isset($_REQUEST['skaicius2'])){
    echo $skaicius1 * $skaicius2;
}else{
    echo 'error';
};