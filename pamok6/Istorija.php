<?php
require_once 'Ivykis.php';

class Istorija
{
    public $laikotarpioPav;
    /**
     * @var array | Ivykis[]
     */
    public $ivykiai;

    public function __construct($laikorpioPav, array $ivykiai)
    {
        $this->laikotarpioPav = $laikorpioPav;
        $this->ivykiai = $ivykiai;
    }


}