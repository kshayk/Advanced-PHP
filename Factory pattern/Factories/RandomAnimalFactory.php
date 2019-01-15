<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 18:57
 */

class RandomAnimalFactory implements AnimalFactory
{
    public function createAnimal()
    {
        $animals = ['Dog', 'Bird', 'Fish'];

        $randomIndex = mt_rand(0, count($animals) - 1);

        return new $animals[$randomIndex];
    }
}