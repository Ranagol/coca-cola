<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Domain\ProductBox;
use App\Domain\DecisionMaker;
use App\Domain\TextBoxInside;
use App\Domain\TextBoxOutside;

class FeatureTest extends TestCase
{
    public function testTextBoxIsInsideProductBox(): void
    {
        // Arrange
        $textBoxInside = new TextBoxInside();
        $productBox = new ProductBox();
        $decisionMaker = new DecisionMaker();

        // Act
        $isInside = $decisionMaker->isInside($productBox, $textBoxInside);

        // Assert
        $this->assertTrue($isInside);
    }

    public function testBoxIsOutsideProductBox(): void
    {
        // Arrange
        $textBoxOutside = new TextBoxOutside();
        $productBox = new ProductBox();
        $decisionMaker = new DecisionMaker();

        // Act
        $isInside = $decisionMaker->isInside($productBox, $textBoxOutside);

        // Assert
        $this->assertFalse($isInside);
    }
}