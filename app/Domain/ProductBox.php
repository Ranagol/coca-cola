<?php

namespace App\Domain;

use App\Domain\Coordinate;

/**
 * This represents a product box. Example: the can/tin of the Coca Cola product with the Coca Cola
 * text on it.
 */
class ProductBox extends Box
{
    private string $type = 'productBox';

    private array $coordinates = [
        new Coordinate('a', 50, 150),
        new Coordinate('b', 150, 150),
        new Coordinate('c', 150, 50),
        new Coordinate('d', 50, 50),
    ];
}