<?php
class Prodotti
{
    public $name;
    public $price;
    public $image;
    public $categoria;

    function __construct(String $name, float $price, String $image, Categorie $categoria)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->categoria = $categoria;
    }
}
