<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:12
 */

require_once('../interfaces/IFlyBehavior.php');

class BFlyNone implements IFlyBehavior
{
    public function fly()
    {
        return false;
    }
}