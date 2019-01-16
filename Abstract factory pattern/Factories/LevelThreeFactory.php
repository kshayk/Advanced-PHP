<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 9:53
 */

class LevelThreeFactory implements LevelsAbstractFactory
{

    public function createEnemy()
    {
        return new HardEnemy();
    }

    public function createPowerup($type)
    {
        if( ! class_exists($type)) {
            throw new \Exception("Could not find power-up type");
        }

        return new $type;
    }
}