<?php
/**
 * Created by PhpStorm.
 * User: boiar
 * Date: 15/07/22
 * Time: 01:50 م
 */

namespace SOLID\DIP;


class PDFBook implements IEBook
{

    public function read()
    {
        echo "reading a pdf book";
    }
}