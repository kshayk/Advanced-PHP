<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 11:54
 */

class Caramel extends AddonDecorator
{
    public $beverage;

    /**
     * The addon must have a relation with the actual beverage in order to sum up the cost of the beverage
     * plus the addon(s) to this beverage.
     *
     * Caramel constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + 2;
    }
}