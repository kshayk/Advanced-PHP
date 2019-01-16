<?php

class LevelOneFactory implements LevelsAbstractFactory
{

    public function createEnemy()
    {
        /**
         * For this example only one class returns but usually there will be a logic behind, that will return the
         * appropriate class based on some logic, and providing that this class belongs to a "level one" type.
         * So for example, in level one we have multiple enemies. This enemies will most likely implement the Enemy
         * interface but maybe they will also inherit another interface just for "easy" enemies.
         *
         * Same goes for the power up
         **/
        return new EasyEnemy();
    }

    public function createPowerup($type)
    {
        if( ! class_exists($type)) {
            throw new \Exception("Could not find power-up type");
        }

        return new $type;
    }
}