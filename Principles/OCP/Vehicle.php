<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 13/07/22
 * Time: 06:12 م
 */

namespace SOLID\OCP;


abstract class Vehicle implements IVehicle
{

    /**
     * @var IMove
     */
    private $movable;


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
     * @var array
     */
    private $routes = [];






    /**
     * @return string
     */
    public function get_color()
    {
        return $this->color;
    }

    /**
     * @param string $color
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
        return $this->max_speed;
    }

    /**
     * @param string $max_speed
     */
    public function set_max_speed($max_speed)
    {
        $this->max_speed = $max_speed;
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
    public function set_driver($driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function get_routes()
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function set_routes($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @return IMove
     */
    public function get_movable()
    {
        return $this->movable;
    }

    /**
     * @param IMove $movable
     */
    public function set_movable($movable)
    {
        $this->movable = $movable;
    }


    public function move()
    {
        return $this->get_movable()->move();
    }



}