<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 14/01/2019
 * Time: 10:51
 */

interface IDisplay
{
    public function display($data);

    public function fetchWeatherData();
}