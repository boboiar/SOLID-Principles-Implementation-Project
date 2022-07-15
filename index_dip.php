<?php

use \SOLID\DIP\EBookReader;
use \SOLID\DIP\PDFBook;
use \SOLID\DIP\MobiBook;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo '<h1 style="color: red">Dependency Inversion Principle (DIP) Output</h1>';


$pdf_book = new PDFBook();
$mobi_book = new MobiBook();
$e_book_reader = new EBookReader($mobi_book);

$e_book_reader->read();

echo '<pre>';
echo '</pre>';