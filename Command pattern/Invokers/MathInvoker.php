<?php

namespace Invokers;

use Commands\AddTenCommand;
use Commands\AddTwoCommand;

/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 10:56
 */

class MathInvoker
{
    private $addTenCommand;
    private $addTwoCommand;

    public function __construct(AddTenCommand $addTenCommand, AddTwoCommand $addTwoCommand)
    {
        $this->addTenCommand = $addTenCommand;
        $this->addTwoCommand = $addTwoCommand;
    }

    public function addTen()
    {
        $this->addTenCommand->execute();
    }

    public function subtractTen()
    {
        $this->addTenCommand->unexecute();
    }

    public function addTwo()
    {
        $this->addTwoCommand->execute();
    }

    public function subtractTwo()
    {
        $this->addTwoCommand->unexecute();
    }
}