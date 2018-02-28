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
        return 'Data: ' . $this->date->diff(new \DateTime('now'))->format('%Y-%m-%d') . ' Automobilio valst. nr.: ' . $this->number . ' Nuvaziuotas atstumas: ' . $this->distance . 'm. Sugaistas laikas: ' . $this->time . 'min.' . '<br>';
    }

    public function getGreitis()
    {
        return $greitis = $this->getKm()/ $this->Getmin();
    }

    public function getKm()
    {
        return $this->distance / 1000;
    }

    public function getMin()
    {
        return $this->time / 60;
    }

    public function greitis()
    {
        $greitis = $this->getKm() / $this->Getmin();
        return 'Automobilio nr: ' . $this->number . ' vidutinis greitis yra: ' . round($greitis, 1) . 'km/h' . '<br>' ;

    }

}