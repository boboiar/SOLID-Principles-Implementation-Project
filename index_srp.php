<?php

use \SOLID\SRP\Bus;
use \SOLID\SRP\Driver;
use \SOLID\SRP\Route;


require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


echo '<h1 style="color: red">Single Responsibility principle (SRP) Output</h1>';

$driver = new Driver('keroles masoud', 22, 'BMB7775', 'Cairo');
$bus = new Bus(101);

$route_80 = new Route('Cairo', 'Alexandria', 310);
$route_90 = new Route('Cairo', 'Minia', 290);


$bus->set_driver($driver);
$bus->set_color('black');
$bus->set_doors(2);
$bus->set_max_speed(140);
$bus->set_num_of_passengers(33);
$bus->add_route($route_80);
$bus->add_route($route_90);




echo '<pre>';
    var_dump($bus);
echo '</pre>';