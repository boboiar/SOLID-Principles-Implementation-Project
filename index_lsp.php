<?php

use \SOLID\LSP\Rectangle;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo '<h1 style="color: red">Liskov Substitution Principle Output</h1>';

$rectangle = new Rectangle();
$rectangle->set_width(4);
$rectangle->set_height(6);


echo '<pre>';
    echo $rectangle->calculate_area();
echo '</pre>';