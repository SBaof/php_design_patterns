<?php

namespace Common;

interface IDatabase
{
    function conncet($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}

class Database
{
    private static $db;

    /**
     * 把构造函数声明为private，防止"new"
     */
    private function __construct()
    {

    }

    /**
     * 把'clone'方法声明为private, 防止克隆单例
     */
    private function __clone()
    {

    }

    /**
     * 把反序列化方法声明为单例，防止反序列化单例
     */
    private function __wakeup()
    {

    }

    public static function getInstance()
    {
        if (self::$db)
        {
            return self::$db;
        }
        else
        {
            self::$db = new self();
            return self::$db;
        }
    }
}
