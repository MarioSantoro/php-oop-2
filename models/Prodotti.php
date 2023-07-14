<?php
class Prodotti
{
    protected $name;
    protected $price;
    protected $image;
    protected $categoria;

    function __construct(String $name, float $price, String $image, Categorie $categoria)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->categoria = $categoria;
    }
}
