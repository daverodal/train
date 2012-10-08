<?php
/**
 * User: david
 * Date: 10/8/12
 * Time: 12:02 PM
 *
 * Script to demonstrate first part of train exercise
 */

require_once("train.php");
require_once("trainCar.php");

$train = new Train();

$car = new TrainCar();
$car->setWeight(100);
$train->addBeg($car);

$car = new TrainCar();
$car->setWeight(45);
$train->addEnd($car);

$car = new TrainCar();
$car->setWeight(30);
$train->addBeg($car);

echo "Train Weight ".$train->getWeight()."<br>\n";
echo "Train Car Count ".$train->getCount()."<br>\n";
echo "First Car weighs ".$train->removeBeg()->getWeight()."<br>\n";
echo "Third Car weighs ".$train->removeEnd()->getWeight()."<br>\n";
echo "Second Car weighs ".$train->removeBeg()->getWeight()."<br>\n";

echo "Empty train weighs ".$train->getWeight()."<br>\n";

echo "Try to get one last car out<br>\n";

$train->removeBeg();