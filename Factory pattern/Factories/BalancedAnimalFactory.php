<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 15/01/2019
 * Time: 19:02
 */

class BalancedAnimalFactory implements AnimalFactory
{

    public function createAnimal()
    {
        // Some logic for balanced animal

        // let's pretend this logic got us the dog class:
        return new Dog();
    }
}