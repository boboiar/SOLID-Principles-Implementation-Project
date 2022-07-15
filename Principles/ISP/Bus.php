<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 14/07/22
 * Time: 05:01 م
 */

namespace SOLID\ISP;


class Bus implements IVehicle, ISpeedControl
{
    public function move()
    {
        echo "I am moving";
    }


    public function stop()
    {
        echo "Stopping";
    }

    public function accelerate()
    {
        echo "I can accelerate up to 200 Km/h";

    }

}