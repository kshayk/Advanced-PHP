<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:07
 */

require_once('../interfaces/IFlyBehavior.php');

class BFlyHigh implements IFlyBehavior
{
    public function fly() {
        return 'high';
    }
}