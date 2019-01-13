<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:24
 */
require_once('./Duck.php');
require_once('../behaviors/BQuackSilent.php');
require_once('../behaviors/BFlyNone.php');
require_once('../behaviors/BDisplayMain.php');

class DomesticDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new BQuackSilent(), new BFlyNone(), new BDisplayMain());
    }
}

$duck = new DomesticDuck();
echo $duck->quack();