<?php
require_once __DIR__ . '/Products.php';
class Accessories extends Products
{
    public $size;
    public $material;


    public function __construct($name, $price, $size, $material)
    {
        parent::__construct($name, $price);
        $this->setSize($size);
        $this->setMaterial($material);
    }
    // settings
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setMaterial($material)
    {
        $this->material = $material;
    }
}