<?php
/**
 * Created by PhpStorm.
 * User: autodoc
 * Date: 17.04.18
 * Time: 11:17
 */

namespace Singleton;

class Singleton
{
    private static $instance;

    private function __construct(){ /* ... @return Singleton */ }  // No `new Singleton()` creation
    private function __clone()    { /* ... @return Singleton */ }  // No clone object initialization
    private function __wakeup()   { /* ... @return Singleton */ }  // No unserialize object initialization


    /**
     * @param mixed $params
     * @return Singleton $instance
     */
    public static function getInstance($params) {
        if ( empty(self::$instance) ) {
            self::$instance = $params;
        }
        return self::$instance;
    }
}