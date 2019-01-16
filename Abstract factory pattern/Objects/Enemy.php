<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 9:58
 */

interface Enemy
{
    public function getType();

    public function getPowerLevel();

    public function getSize();
}