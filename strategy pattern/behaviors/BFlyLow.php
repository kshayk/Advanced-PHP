<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:08
 */

require_once('../interfaces/IFlyBehavior.php');

class BFlyLow implements IFlyBehavior
{
    public function fly() {
        return 'low';
    }
}