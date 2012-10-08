<?php
/**
 * Passenger Car class
 * User: david
 * Date: 10/8/12
 * Time: 12:19 PM
 * To change this template use File | Settings | File Templates.
 */

class FreightCar extends TrainCar{
    private $isHazardous = false;

    public function setIsHazardousCargo($isHazardous){
        $this->isHazardous = $isHazardous;
    }

    public function getIsHazardousCargo(){
        return $this->isHazardous;
    }
}