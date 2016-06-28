<?php

namespace Common;

class Factory
{
    public static function createObj()
    {
        $obj = new Object();
        return $obj;
    }

    public static function createDatabase()
    {
        echo 1, PHP_EOL;
        $obj = Database::getInstance();
        Register::set('db1', $obj);
    }
}
