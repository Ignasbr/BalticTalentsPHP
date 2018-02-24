<?php

class Automobilis
{
    public $marke;
    public $modelis;

    public function pilnasAuto() {
        return $this->marke . ' ' . $this->modelis;
    }

    public function __construct($marke, $modelis)
    {
        $this->marke = $marke;
        $this->modelis = $modelis;
    }
}

