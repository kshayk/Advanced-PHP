<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 18:48
 */

class Dog implements Animal
{
    public function getColor()
    {
        return 'brown';
    }

    public function getHeight()
    {
        return '70cm';
    }

    public function getHabitat()
    {
        return 'land';
    }
}