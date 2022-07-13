<?php


namespace SOLID\OCP;


class Route
{

    /**
     * @var string
     */
    private $source;
    /**
     * @var string
     */
    private $destination;
    /**
     * @var int
     */
    private $distance;


    /**
     * Route constructor.
     * @param $source
     * @param $destination
     * @param $distance
     */
    public function __construct($source, $destination, $distance)
    {
        $this->set_source($source);
        $this->set_destination($destination);
        $this->set_distance($distance);


    }

    /**
     * @return string
     */
    public function get_source()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function set_source($source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function get_destination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function set_destination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function get_distance()
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function set_distance($distance)
    {
        $this->distance = $distance;
    }


}