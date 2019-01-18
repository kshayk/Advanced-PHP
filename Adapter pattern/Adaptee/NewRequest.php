<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 17/01/2019
 * Time: 17:05
 */

class NewRequest
{
    public function newRequestMethod($status, $data)
    {
        //Do some logic here
        echo "{$status} - {$data}";

        return 1;
    }
}