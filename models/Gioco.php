<?php
include_once __DIR__ . '/Prodotti.php';
class Gioco extends Prodotti
{
    protected $morbido;
    protected $colore;

    function __construct(bool $morbido, String $colore, string $name, float $price, string $image,  Categorie $categoria)
    {
        parent::__construct($name, $price, $image, $categoria);
        $this->morbido = $morbido;
        $this->colore = $colore;
    }
}
