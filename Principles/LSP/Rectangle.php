<?php

namespace SOLID\LSP;


class Rectangle
{
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;


    /**
     * @return mixed
     */
    public function get_width()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function set_width($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function get_height()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function set_height($height)
    {
        $this->height = $height;
    }


    /**
     * Calculate the area of the rectangle
     * @return int
     */
    public function calculate_area()
    {
        return $this->get_width() * $this->get_height();
    }


}