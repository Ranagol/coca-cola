<?php

namespace App\Domain;

class DecisionMaker
{
    private ProductBox $productBox;

    private TextBox $textBox;

    /**
     * Decides whether a given TextBox is inside a given ProductBox.
     *
     * @param ProductBox $productBox
     * @param TextBox $textBox
     * @return boolean
     */
    public function isInside(ProductBox $productBox, TextBox $textBox): bool
    {
        $this->productBox = $productBox;
        $this->textBox = $textBox;

        $textBoxCoordinates = $this->textBox->getCoordinates();
        $productBoxCoordinates = $this->productBox->getCoordinates();

        $isInsideA = $this->checkCoordinates('a', $textBoxCoordinates, $productBoxCoordinates);
        $isInsideB = $this->checkCoordinates('b', $textBoxCoordinates, $productBoxCoordinates);
        $isInsideC = $this->checkCoordinates('c', $textBoxCoordinates, $productBoxCoordinates);
        $isInsideD = $this->checkCoordinates('d', $textBoxCoordinates, $productBoxCoordinates);

        /**
         * this returns true, if all 4 text box coordinates are inside the product box, false if any 
         * of them is outside
         */
        return $isInsideA && $isInsideB && $isInsideC && $isInsideD;
    }

    /**
     * returns true, if the a coordinate is inside the product box.
     * returns false, if the a coordinate is outside the product box
     * 
     * We check for every 4 coordinate (named a, b, c, d) of the text box, their position in
     * comparison with the 4 coordinates of the product box. For every one of the 4 coordinates
     * we return true, if the following conditions are met:
     * 
     * coordinate a, value x of the TextBox must be > than coordinate a, value x of the ProductBox
     * coordinate a, value y of the TextBox must be < than coordinate a, value y of the ProductBox
     * 
     * coordinate b, value x of the TextBox must be < than coordinate b, value x of the ProductBox
     * coordinate b, value y of the TextBox must be < than coordinate b, value y of the ProductBox
     * 
     * coordinate c, value x of the TextBox must be < than coordinate c, value x of the ProductBox
     * coordinate c, value y of the TextBox must be > than coordinate c, value y of the ProductBox
     * 
     * coordinate d, value x of the TextBox must be > than coordinate d, value x of the ProductBox
     * coordinate d, value y of the TextBox must be > than coordinate d, value y of the ProductBox
     *
     * @param string $coordinateName
     * @param array $textBoxCoordinates
     * @param array $productBoxCoordinates
     * @return boolean
     */
    private function checkCoordinates(
        string $coordinateName, 
        array $textBoxCoordinates, 
        array $productBoxCoordinates
    ): bool
    {
        
        //Here we do our logic for deciding whether the TextBox is inside the ProductBox
        if($isInside === true) {
            return true;
        }

        return false;
    }


}