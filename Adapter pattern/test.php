<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 18/01/2019
 * Time: 13:18
 */

require_once 'Adaptee/NewRequest.php';
require_once 'Adapter/ITarget.php';
require_once 'Adapter/RequestAdapter.php';

$newRequest = new NewRequest();

$adapter = new RequestAdapter($newRequest);

$adapter->request("data", "status");