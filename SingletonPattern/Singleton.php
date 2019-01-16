<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 16/01/2019
 * Time: 17:13
 */

class Singleton
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if( ! Singleton::$instance) {
            Singleton::$instance = new Singleton();
        }

        return Singleton::$instance;
    }
}