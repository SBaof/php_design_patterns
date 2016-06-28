<?php

namespace Common;

class Register
{
    protected static $objects;

    public static function set($alias, $object)
    {
        echo 2, PHP_EOL;
        self::$objects[$alias] = $object;
    }

    public static function get($name)
    {
        return self::$objects[$name];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}
