<?php


namespace SOLID\OCP;


class Trip
{

    /**
     * @var Vehicle
     */
    private $vehicle;
    /**
     * @var string
     */
    private $trip_num;
    /**
     * @var float
     */
    private $trip_price;
    /**
     * @var int time duration in minutes
     */
    private $duration;


    /**
     * Trip constructor.
     * @param Vehicle $vehicle
     * @param string $trip_num
     * @param float $trip_price
     * @param int $duration
     */
    public function __construct(Vehicle $vehicle, $trip_num, $trip_price, $duration)
    {
        $this->set_bus($vehicle);
        $this->set_trip_num($trip_num);
        $this->set_trip_price($trip_price);
        $this->set_duration($duration);

    }


    /**
     * @return Vehicle
     */
    public function get_vehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function set_bus($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return string
     */
    public function get_trip_num()
    {
        return $this->trip_num;
    }

    /**
     * @param string $trip_num
     */
    public function set_trip_num($trip_num)
    {
        $this->trip_num = $trip_num;
    }

    /**
     * @return float
     */
    public function get_trip_price()
    {
        return $this->trip_price;
    }

    /**
     * @param float $trip_price
     */
    public function set_trip_price($trip_price)
    {
        $this->trip_price = $trip_price;
    }

    /**
     * @return int
     */
    public function get_duration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function set_duration($duration)
    {
        $this->duration = $duration;
    }

    public function move()
    {

        return $this->vehicle->move();
    }

}