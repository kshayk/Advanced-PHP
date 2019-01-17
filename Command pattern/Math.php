<?php

require_once 'Commands/ICommand.php';
require_once 'Commands/AddTenCommand.php';
require_once 'Commands/AddTwoCommand.php';
require_once 'Invokers/MathInvoker.php';

use Commands\AddTenCommand;
use Commands\AddTwoCommand;
use Invokers\MathInvoker;

/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 10:57
 */

class Math
{
    public $sum = 0;

    public function add(int $number)
    {
        $this->sum += $number;
    }

    public function subtract(int $number)
    {
        $this->sum -= $number;
    }
}

//instantiating new math object
$math = new Math();

//instantiating the invoker (the command control) with the commands as parameters
//We add make use of the math object inside of our commands, so we pass the math object in the command's constructor.
$invoker = new MathInvoker(new AddTenCommand($math), new AddTwoCommand($math));

//Running some commands through the invoker
$invoker->addTen();
$invoker->addTen();
$invoker->addTwo();
$invoker->subtractTen();

echo $math->sum; //should result in 12



