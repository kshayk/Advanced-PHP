<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 9:59
 */

interface Powerup
{
    public function getType();

    public function onContact();
}