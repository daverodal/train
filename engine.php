<?php
/**
 * Engine extends a TrainCar Inherits parent classes methods and properties.
 * User: david
 * Date: 10/8/12
 * Time: 12:16 PM
 */

class Engine extends TrainCar{
    private $fuelLevel = 0;

    public function setFuel($fuel){
        $this->fuel = $fuel;
    }

    public function getFuel(){
        return $this->fuel;
    }
}