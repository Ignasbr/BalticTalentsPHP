<?php

class Radar
{
    public $date;
    public $number;
    public $distance;
    public $time;

    public function __construct(\DateTime $date, $number, $distance, $time)
    {

        $this->date = $date;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;

    }

    public function getDate()
    {
        return $this->date;
    }

    public function getInfo()
    {
        return 'Data: ' . $this->date->diff(new \DateTime('now'))->format('%Y-%m-%d') . ' Automobilio valst. nr.: ' . $this->number . ' Nuvaziuotas atstumas: ' . $this->distance . 'km/h. Sugaistas laikas: ' . $this->time . 'h.' . '<br>';
    }

    public function getGreitis()
    {
        return $greitis = $this->distance / $this->time;
    }

    public function greitis()
    {
        $greitis = $this->distance / $this->time;
        return 'Automobilio nr: ' . $this->number . ' greitis yra: ' . round($greitis, 1) . 'km/h' . '<br>' ;

    }

}