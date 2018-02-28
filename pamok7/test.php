<?php

$data = array(
    array(
        "title" => "Another title",
        "date"  => "Fri, 17 Jun 2011 08:55:57 +0200"
    ),
    array(
        "title" => "My title",
        "date"  => "Mon, 16 Jun 2010 06:55:57 +0200"
    )
);

function sortFunction( $a, $b ) {
    return strtotime($a["date"]) - strtotime($b["date"]);
}
usort($data, "sortFunction");
var_dump($data);