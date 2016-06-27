<?php

namespace Common;

class Object
{
    protected $array = [];

    public function __set($key, $value)
    {
        var_dump(__method__);
        $this->array[$key] = $value;
    }

    public function __get($key)
    {
        var_dump(__method__);
        return $this->array[$key];
    }

    public function __call($func, $param)
    {
        var_dump($func, $param);
        return "magic function\n";
    }

    public static function __callStatic($func, $param)
    {
        var_dump($func, $param);
        return "magic static function\n";
    }

    public function __toString()
    {
        return __class__;
    }

    public function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }

    public static function test()
    {
        echo __method__, PHP_EOL;
    }

}
