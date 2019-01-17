<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 10:09
 */
namespace Commands;

use Math;

class AddTwoCommand implements ICommand
{
    private $receiver;

    public function __construct(Math $math)
    {
        $this->receiver = $math;
    }

    public function execute()
    {
        $this->receiver->add(2);
    }

    public function unexecute()
    {
        $this->receiver->subtract(2);
    }
}