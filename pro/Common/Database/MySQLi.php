<?php

namespace Common\Database;

use Common\Database;

class MySQLi implements IDatabase
{
    protected $conn;

    function conncet($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($hosr, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $ret = mysqli_query($this->conn, $sql);
        return $ret;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}
