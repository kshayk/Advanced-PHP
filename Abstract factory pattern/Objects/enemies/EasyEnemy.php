<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 13:55
 */

class EasyEnemy implements Enemy
{

    public function getType()
    {
        return 'easy';
    }

    public function getPowerLevel()
    {
        return 1;
    }

    public function getSize()
    {
        return 2;
    }
}