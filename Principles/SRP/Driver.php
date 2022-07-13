<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 12/07/22
 * Time: 10:04 م
 */

namespace SOLID\SRP;


class Driver
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;
    /**
     * @var string
     */
    private $insurance_num;
    /**
     * @var string
     */
    private $address;


    /**
     * Driver constructor.
     * @param $name
     * @param $age
     * @param $insurance_num
     * @param $address
     */
    public function __construct($name, $age, $insurance_num, $address)
    {

        $this->set_name($name);
        $this->set_age($age);
        $this->set_insurance_num($insurance_num);
        $this->set_address($address);

    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function set_name($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function get_age()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function set_age($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function get_insurance_num()
    {
        return $this->insurance_num;
    }

    /**
     * @param string $insurance_num
     */
    public function set_insurance_num($insurance_num)
    {
        $this->insurance_num = $insurance_num;
    }

    /**
     * @return string
     */
    public function get_address()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function set_address($address)
    {
        $this->address = $address;
    }


}