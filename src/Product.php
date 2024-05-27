<?php

namespace App;

abstract class Product
{
    protected string $name;
    protected float $price;

    abstract public function getSurface(): float;
}
