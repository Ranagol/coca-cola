<?php

namespace App\Domain;

use App\Domain\Coordinate;

class Box
{
    private string $type;

    private array $coordinates;

    /**
     * Get the value of coordinates
     */ 
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}