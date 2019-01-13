<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 13/01/2019
 * Time: 20:21
 */

require_once('../interfaces/IDisplayBehavior.php');

class BDisplayMain implements IDisplayBehavior
{
    public function display()
    {
        return 'duck-ish';
    }
}