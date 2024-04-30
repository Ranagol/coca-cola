<?php

namespace App\Domain;

use App\Domain\Coordinate;

/**
 * This represents a Coca Cola text inside the ProductBox.
 */
class TextBoxInside extends TextBox
{
    private array $coordinates = [
        new Coordinate('a', 60, 80),
        new Coordinate('b', 80, 80),
        new Coordinate('c', 80, 60),
        new Coordinate('d', 60, 60),
    ];
}