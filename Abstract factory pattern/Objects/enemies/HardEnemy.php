<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 13:58
 */

class HardEnemy implements Enemy
{

    public function getType()
    {
        return 'hard';
    }

    public function getPowerLevel()
    {
        return 3;
    }

    public function getSize()
    {
        return 6;
    }
}