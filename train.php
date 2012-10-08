<?php
require_once("logger.php");
/**
 * Train.php a class to represent a train.
 * User: david
 * Date: 10/8/12
 * Time: 11:48 AM
 */
class Train{
    /*
     * a train 'has a' train car so encapsulate
     */
    private $weight = 0;
    private $trainCarArray = array();
    private $count = 0;

    public function addBeg(trainCar $car){
        if($this->count >= 30){
            return false;
        }
        $this->count++;
        $this->weight += $car->getWeight();
        array_unshift($this->trainCarArray,$car);
        return true;
    }

    public function addEnd(trainCar $car){
        if($this->count >= 30){
            return false;
        }
        $this->count++;
        $this->weight += $car->getWeight();
        array_push($this->trainCarArray,$car);
        return true;
    }

    public function removeBeg(){
        if($this->count <= 0){
            Logger::log("Tried to remove from empty train");
            return false;
        }
        $car = array_shift($this->trainCarArray);
        $this->weight -= $car->getWeight();
        $this->count--;
        return $car;
    }

    public function removeEnd(){
        if($this->count <= 0){
            Logger::log("Tried to remove from empty train");
            return false;
        }
        $car = array_pop($this->trainCarArray);
        $this->weight -= $car->getWeight();
        $this->count--;
        return $car;
    }

    function getCount(){
        return $this->count;
    }

    function getWeight(){
        return $this->weight;
    }
}