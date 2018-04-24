<?php

include_once 'vendor/autoload.php';

use Singleton\Singleton;


var_dump(Singleton::getInstance(['something' => 'First Value']));
var_dump(Singleton::getInstance(['something_else' => 'Second Value']));
