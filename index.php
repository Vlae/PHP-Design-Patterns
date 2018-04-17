<?php

include_once 'Singletone.php';

var_dump(Singletone::getInstance(['something' => 'First Value']));
var_dump(Singletone::getInstance(['something_else' => 'Second Value']));

