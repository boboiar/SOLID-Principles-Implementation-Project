<?php

use \SOLID\OCP\Bus;
use \SOLID\OCP\Driver;
use \SOLID\OCP\Route;
use \SOLID\OCP\Trip;
use \SOLID\OCP\Car;
use \SOLID\OCP\Plane;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo '<h1 style="color: red">Open/Closed Principle (OCP) Output</h1>';

$driver = new Driver('keroles masoud', 22, 'BMB7775', 'Cairo');


$route_80 = new Route('Cairo', 'Alexandria', 310);
$route_90 = new Route('Cairo', 'Minia', 290);



$vehicle = new Plane();

$vehicle->set_driver($driver);
$vehicle->set_color('black');
$vehicle->set_max_speed(140);
$vehicle->set_movable(new \SOLID\OCP\FlyingInSky());




$trip = new Trip($vehicle, 'T205', 55, 120);

echo '<pre>';
    var_dump($trip->move());
echo '</pre>';