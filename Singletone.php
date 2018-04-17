<?php
/**
 * Created by PhpStorm.
 * User: autodoc
 * Date: 17.04.18
 * Time: 11:17
 */

class Singletone
{
    private static $instance;

    private function __construct(){ /* ... @return Singletone */ }  // No `new Singletone()` creation
    private function __clone()    { /* ... @return Singletone */ }  // No clone object initialization
    private function __wakeup()   { /* ... @return Singletone */ }  // No unserialize object initialization


    /**
     * @param mixed $params
     * @return Singletone $instance
     */
    public static function getInstance($params) {
        if ( empty(self::$instance) ) {
            self::$instance = $params;
        }
        return self::$instance;
    }
}