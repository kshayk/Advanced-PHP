<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 18:52
 */

class Bird implements Animal
{
    public function getColor()
    {
        return 'white';
    }

    public function getHeight()
    {
        return '20cm';
    }

    public function getHabitat()
    {
        return 'air';
    }
}