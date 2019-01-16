<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 9:52
 */

class LevelTwoFactory implements LevelsAbstractFactory
{

    public function createEnemy()
    {
        return new MediumEnemy();
    }

    public function createPowerup($type)
    {
        if( ! class_exists($type)) {
            throw new \Exception("Could not find power-up type");
        }

        return new $type;
    }
}