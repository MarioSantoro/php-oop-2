<?php
include_once __DIR__ . '/Prodotti.php';
class Cuccia extends Prodotti
{
    protected $grandezza;
    protected $taglia_animale;

    function __construct(String $grandezza, String $taglia_animale, string $name, float $price, string $image,  Categorie $categoria)
    {
        parent::__construct($name, $price, $image, $categoria);
        $this->grandezza = $grandezza;
        $this->taglia_animale = $taglia_animale;
    }
}
