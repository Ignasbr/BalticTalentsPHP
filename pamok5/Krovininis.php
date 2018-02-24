<?php

class Krovininis extends Automobilis
{
    public $svoris;

    public function __construct($marke, $modelis, $svoris)
    {
        parent::__construct($marke, $modelis);
        $this->svoris = $svoris;
    }

}

