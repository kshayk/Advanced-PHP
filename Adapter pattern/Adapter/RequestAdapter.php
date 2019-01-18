<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 16:59
 */

class RequestAdapter implements ITarget
{
    private $adaptee;

    public function __construct(NewRequest $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request($data, $status)
    {
       $this->adaptee->newRequestMethod($status, $data);
    }
}