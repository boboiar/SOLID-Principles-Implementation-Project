<?php

namespace SOLID\OCP;


class Bus extends Vehicle
{


    /**
     * @var int
     */
    private $bus_num;
    /**
     * @var int
     */
    private $num_of_passengers;
    /**
     * @var int
     */
    private $doors;



    /**
     * Bus constructor.
     * @param $bus_num
     */
    public function __construct($bus_num)
    {
        $this->set_bus_num($bus_num);
    }

    /**
     * @return int
     */
    public function get_bus_num()
    {
        return $this->bus_num;
    }

    /**
     * @param int $bus_num
     */
    public function set_bus_num($bus_num)
    {
        $this->bus_num = $bus_num;
    }

    /**
     * @return mixed
     */
    public function get_num_of_passengers()
    {
        return $this->num_of_passengers;
    }

    /**
     * @param mixed $num_of_passengers
     */
    public function set_num_of_passengers($num_of_passengers)
    {
        $this->num_of_passengers = $num_of_passengers;
    }

    /**
     * @return mixed
     */
    public function get_doors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function set_doors($doors)
    {
        $this->doors = $doors;
    }



    /** @param $from
     * @param $to
     * @return string
     */
    public function driver_to_route($from, $to)
    {

        return 'The bus is moving from ' . $from . ' to '. $to;
    }


    /**
     * @return string
     */
    public function do_maintenance()
    {
        return 'The bus is doing maintenance right now !';

    }



}