<?php

namespace Common\Database;

use Common\Database;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host; dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}
