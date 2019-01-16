<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 14:04
 */

class Boost implements Powerup
{

    public function getType()
    {
        return 'boost';
    }

    public function onContact()
    {
        return 'make character stronger';
    }
}