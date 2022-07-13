<?php

namespace SOLID\SRP;


class Bus
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
     * @var string
     */
    private $color;
    /**
     * @var string
     */
    private $max_speed;
    /**
     * @var Driver
     */
    private $driver;
    /**
     * @var int
     */
    private $doors;
    /**
     * @var array
     */
    private $routes = [];


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
    public function get_color()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function set_color($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function get_max_speed()
    {
        return $this->max_speed . ' K/h';
    }

    /**
     * @param mixed $max_speed
     */
    public function set_max_speed($max_speed)
    {
        $this->max_speed = $max_speed;
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

    /**
     * @return array
     */
    public function get_routes()
    {
        return $this->routes;
    }


    /**
     * @param Route $route
     */
    public function add_route(Route $route)
    {
        $this->routes[] = $route;
    }

    /**
     * @return Driver
     */
    public function get_driver()
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function set_driver(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param $from
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

    public function move()
    {
        $output = '';
        foreach ($this->get_routes() as $route){
            $output .= '<p> I am moving from ' . $route->get_source() . ' to '. $route->get_destination() . ' at a maximum speed of '
                        . $this->get_max_speed();
        }

        return $output;
    }


}