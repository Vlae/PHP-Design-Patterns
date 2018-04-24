<?php

use Singleton\Singleton;

class SingletonTest extends PHPUnit_Framework_TestCase {

    public function testGetInstance() {
        $this->assertEquals('first instance', Singleton::getInstance('first instance'));
        $this->assertEquals('first instance', Singleton::getInstance('second instance'));
    }
}
