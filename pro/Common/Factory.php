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
        return Database::getInstance();
    }
}
