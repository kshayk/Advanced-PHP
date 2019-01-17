<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 10:08
 */
namespace Commands;

interface ICommand
{
    public function execute();

    public function unexecute();
}