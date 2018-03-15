<?php
// +----------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +----------------------------------------------------------------------
// |User: zhenglc/form ShouKun Liu  |  
// +----------------------------------------------------------------------
// | TITLE: this to do?
// +----------------------------------------------------------------------


namespace RESTful\facade;


class Factory
{

    private static $Factory;

    private function __construct()
    {
    }

    public static function getInstance($className, $options = null)
    {
        if (!isset(self::$Factory[$className]) || !self::$Factory[$className]) {
            self::$Factory[$className] = new $className($options);
        }
        return self::$Factory[$className];
    }
}