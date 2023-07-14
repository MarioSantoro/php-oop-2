<?php
include_once __DIR__ . '/Prodotti.php';
class Cibo extends Prodotti
{
    public $tipo;
    public $peso;

    function __construct(String $tipo, int $peso, string $name, float $price, string $image,  Categorie $categoria)
    {
        parent::__construct($name, $price, $image, $categoria);
        $this->tipo = $tipo;
        $this->peso = $peso;
    }
}
