<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 13:58
 */

class MediumEnemy implements Enemy
{

    public function getType()
    {
        return 'medium';
    }

    public function getPowerLevel()
    {
        return 2;
    }

    public function getSize()
    {
        return 4;
    }
}