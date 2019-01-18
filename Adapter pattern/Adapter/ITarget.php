<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 16:57
 */

interface ITarget
{
    /**\
     * This is the method we want to use in our code instead of the method that exists
     * in the class we are trying to reach.
     *
     * @return mixed
     */
    public function request($data, $status);
}