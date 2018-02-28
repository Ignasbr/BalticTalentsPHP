<?php

class Suo extends Gyvunas
{
    public $spalva;
    public $lytis;

    public function sunelis() {
        return $this->spalva . ' ' . $this->lytis . ' ' . $this->gyvunelis();
    }

    public function __construct($svoris, $ugis, $spalva, $lytis)
    {
        parent::__construct($svoris, $ugis);
        $this->spalva = $spalva;
        $this->lytis = $lytis;
    }

}