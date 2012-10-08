<?php
/**
 * TrainCar.php a class to represent a train car.
 * User: david
 * Date: 10/8/12
 * Time: 11:49 AM
 */
class TrainCar{
    private $weight;

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
}