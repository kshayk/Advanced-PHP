<?php

require_once "./Factories/LevelsAbstractFactory.php";
require_once "./Factories/LevelOneFactory.php";
require_once "./Factories/LevelTwoFactory.php";
require_once "./Factories/LevelThreeFactory.php";

require_once "./Objects/Enemy.php";
require_once "./Objects/Powerup.php";
require_once "./Objects/enemies/EasyEnemy.php";
require_once "./Objects/enemies/MediumEnemy.php";
require_once "./Objects/enemies/HardEnemy.php";
require_once "./Objects/powerups/OneUp.php";
require_once "./Objects/powerups/Boost.php";

////////// Level 1 ////////////
$level1Factory = new LevelOneFactory();
$level1Enemy = $level1Factory->createEnemy();
$level1Power = $level1Factory->createPowerup('Boost');

echo "{$level1Enemy->getType()} - {$level1Power->getType()} \n";

////////// Level 2 ////////////
$level2Factory = new LevelTwoFactory();
$level2Enemy = $level2Factory->createEnemy();
$level2Power = $level2Factory->createPowerup('OneUp');

echo "{$level2Enemy->getType()} - {$level2Power->getType()} \n";

////////// Level 3 ////////////
$level3Factory = new LevelThreeFactory();
$level3Enemy = $level3Factory->createEnemy();
$level3Power = $level3Factory->createPowerup('Boost');

echo "{$level3Enemy->getType()} - {$level3Power->getType()} \n";