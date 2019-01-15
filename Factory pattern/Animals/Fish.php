<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 18:51
 */

class Fish implements Animal
{
    public function getColor()
    {
        return 'blue';
    }

    public function getHeight()
    {
        return '3cm';
    }

    public function getHabitat()
    {
        return 'water';
    }
}