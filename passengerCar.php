<?php
/**
 * Passenger Car class
 * User: david
 * Date: 10/8/12
 * Time: 12:19 PM
 * To change this template use File | Settings | File Templates.
 */

class PassengerCar extends TrainCar{
    private $numPass = 0;

    public function setPassengers($passengers){
        $this->numPass = $passengers;
    }

    public function getPassengers(){
        return $this->numPass;
    }
}