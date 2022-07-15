<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 14/07/22
 * Time: 05:01 م
 */

namespace SOLID\ISP;


class Car implements IVehicle, ISpeedControl, IEntertainment
{
    public function move()
    {
        echo "I am moving";
    }

    public function accelerate()
    {
        echo "I can accelerate up to 200 Km/h";

    }
    public function stop()
    {
        echo "Stopping";
    }
    public function music_play()
    {
        echo "Playing your fav music !";
    }
    public function pause()
    {
        echo "Pause current track";
    }
    public function rewind()
    {
        echo "I will rewind the tape";
    }


}