<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 9:50
 */

interface LevelsAbstractFactory
{
    public function createEnemy();

    public function createPowerup($type);
}