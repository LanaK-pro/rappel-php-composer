<?php

namespace App;

class ProductRect extends Product
{
    private int $width;
    private int $height;

    public function getSurface(): float
    {
        return $this->width * $this->height;
    }
}
