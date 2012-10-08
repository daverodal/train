<?php
/**
 * User: david
 * Date: 10/8/12
 * Time: 12:02 PM
 *
 * Script to demonstrate second part of train exercise
 */

require_once("train.php");
require_once("trainCar.php");
require_once("freightCar.php");
require_once("passengerCar.php");
require_once("engine.php");

$train = new Train();

$car = new Engine();
$car->setWeight(45);
$car->setFuel(100);
$train->addBeg($car);

$car = new PassengerCar();
$car->setWeight(100);
$car->setPassengers(20);
$train->addEnd($car);


$car = new FreightCar();
$car->setWeight(30);
$car->setIsHazardousCargo(false);
$train->addEnd($car);

echo "Train Weight ".$train->getWeight()."<br>\n";
echo "Train Car Count ".$train->getCount()."<br>\n";
$first = $train->removeBeg();
echo "First Car weighs ".$first->getWeight()."<br>\n";
echo "First Cars Fuel Level ".$first->getFuel()."<br>\n";
$second = $train->removeBeg();
echo "Second Car weighs ".$second->getWeight()."<br>\n";
echo "Second Car number of passengers ".$second->getPassengers()."<br>\n";

$third = $train->removeBeg();
echo "Third Car weighs ".$third->getWeight()."<br>\n";
$hazard = $third->getIsHazardousCargo() == true ? "" : "No";

echo "Third Car has $hazard Hazardous Cargo <br>\n";

echo "Empty train weighs ".$train->getWeight()."<br>\n";

