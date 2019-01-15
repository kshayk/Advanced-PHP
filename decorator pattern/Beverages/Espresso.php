<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 11:53
 */

require_once '../Beverage.php';
require_once '../decorators/AddonDecorator.php';
require_once '../decorators/ConcreteDecorators/Caramel.php';

class Espresso extends Beverage
{
    public function cost()
    {
        return 1;
    }
}

class MakeBeverage {
    private $currentBeverageState;

    public function __construct($type)
    {
        switch ($type) {
            case 'espresso':
                $this->currentBeverageState = new Espresso();
                break;
            default:
                throw new Exception("Beverage chosen is not valid");
                break;
        }
    }

    public function addCondiment($condiment)
    {
        if( ! $this->currentBeverageState) {
            throw new Exception('No beverage chosen');
        }

        switch ($condiment) {
            case 'caramel':
                $this->currentBeverageState = new Caramel($this->currentBeverageState);
                break;
            default:
                throw new Exception("Condiment chosen is not valid");
                break;
        }
    }

    public function calculate()
    {
        if( ! $this->currentBeverageState) {
            throw new Exception('No beverage chosen');
        }

        return $this->currentBeverageState->cost();
    }
}

try {
    $beverage = new MakeBeverage('espresso');
} catch (\Exception $e) {
    echo $e->getMessage();
}

try {
    $beverage->addCondiment('caramel');
    $beverage->addCondiment('caramel');
    $beverage->addCondiment('caramel');
    $beverage->addCondiment('caramel');
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo $beverage->calculate();




//$espresso = new Espresso();
//$caramel = new Caramel($espresso);
//$caramel2 = new Caramel($caramel);
//$caramel3 = new Caramel($caramel2);
//
//echo $caramel3->cost();