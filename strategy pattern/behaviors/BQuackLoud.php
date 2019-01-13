<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:19
 */

require_once('../interfaces/IQuackBehavior.php');

class BQuackLoud implements IQuackBehavior
{
    public function quack()
    {
        return 'loud';
    }
}