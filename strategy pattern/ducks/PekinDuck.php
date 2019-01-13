<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:37
 */

require_once('./Duck.php');

require_once('../behaviors/BQuackLoud.php');
require_once('../behaviors/BFlyHigh.php');
require_once('../behaviors/BDisplayMain.php');

class PekinDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new BQuackLoud(), new BFlyHigh(), new BDisplayMain());
    }
}

$pekin = new PekinDuck();
echo $pekin->fly();