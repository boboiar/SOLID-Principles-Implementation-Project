<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 14/07/22
 * Time: 05:01 م
 */

namespace SOLID\ISP;


class Truck implements IVehicle, IHeavy
{
    public function move()
    {
        echo "I am moving";
    }

    public function stop()
    {
        echo "Stopping";
    }

    public function carry_heavy_cargo()
    {
        echo "I cam carry heavy cargo";
    }

}