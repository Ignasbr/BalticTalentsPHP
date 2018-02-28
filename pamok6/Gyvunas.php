<?php

class Gyvunas
{
    public $svoris;
    public $ugis;

    public function gyvunelis()
    {
        return $this->svoris . ' ' . $this->ugis;
    }

    public function __construct($svoris, $ugis)
    {
        $this->svoris = $svoris;
        $this->ugis = $ugis;

    }
}