<?php


namespace SOLID\DIP;


class EBookReader
{
    private $book;

    public function __construct(IEBook $book)
    {
        $this->book = $book;

    }

    function read()
    {
        return $this->book->read();
    }

}