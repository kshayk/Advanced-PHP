<?php

require_once './Factories/AnimalFactory.php';
require_once './Factories/BalancedAnimalFactory.php';
require_once './Factories/RandomAnimalFactory.php';
require_once './Animals/Animal.php';
require_once './Animals/Animal.php';
require_once './Animals/Dog.php';
require_once './Animals/Fish.php';
require_once './Animals/Bird.php';

/********************************************** **********************************************************/
                                       //random Factory//
/********************************************** **********************************************************/

//Instantiate the factory
$randomFactory = new RandomAnimalFactory();

//get the animal class
$animal = $randomFactory->createAnimal();

//see results
echo $animal->getColor();

/********************************************** **********************************************************/
                                     //balanced Factory//
/********************************************** **********************************************************/

//Instantiate the balanced factory
$balancedFactory = new BalancedAnimalFactory();

//get the animal class
$animal2 = $balancedFactory->createAnimal();

//see results
echo $animal2->getColor();