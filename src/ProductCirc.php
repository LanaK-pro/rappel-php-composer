<?php

namespace App;

class ProductCirc extends Product
{
    private int $diameter;

    public function getSurface(): float
    {
        return M_PI * (($this->diameter / 2) ** 2);
    }
}
