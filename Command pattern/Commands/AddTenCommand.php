<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 11:03
 */

namespace Commands;

use Math;

class AddTenCommand implements ICommand
{
    private $receiver;

    public function __construct(Math $math)
    {
        $this->receiver = $math;
    }

    public function execute()
    {
        $this->receiver->add(10);
    }

    public function unexecute()
    {
        $this->receiver->subtract(10);
    }
}