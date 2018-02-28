<?php

class Ivykis
{
    public $pavadinimas;
    public $data;

    public function __construct($pavadinimas, \DateTime $dateTime){

        $this->pavadinimas = $pavadinimas;
        $this->data = $dateTime;

    }

    public function timeAgo()
    {
        return $this->data->diff(new \DateTime('now'));
    }
}

