<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 15/07/22
 * Time: 02:02 م
 */

namespace SOLID\DIP;


class MobiBook implements IEBook
{
    public function read()
    {
        echo "reading a mobi book";
    }

}