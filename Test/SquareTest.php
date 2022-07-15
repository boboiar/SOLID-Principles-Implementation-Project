<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 14/07/22
 * Time: 11:59 ص
 */

use SOLID\LSP\Square;

class SquareTest extends PHPUnit\Framework\TestCase
{

    /**
     * @var Square
     */
    private $square;




    public function setUp() :void
    {

        $this->square = new \SOLID\LSP\Rectangle();
        $this->square->set_width(6);
        $this->square->set_height(4);
    }

    public function test_area_is_valid()
    {
        $this->assertEquals(24, $this->square->calculate_area());
    }
}
