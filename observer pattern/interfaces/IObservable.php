<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 14/01/2019
 * Time: 10:30
 */

interface IObservable
{
    public function add(IObserver $observer);

    public function remove(IObserver $observer);

    public function notify();
}