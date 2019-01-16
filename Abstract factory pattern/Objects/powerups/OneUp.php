<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 14:01
 */

class OneUp implements Powerup
{

    public function getType()
    {
        return 'oneUp';
    }

    public function onContact()
    {
        return 'Add life';
    }
}