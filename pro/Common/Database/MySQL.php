<?php

namespace Common\Database;

use Common\Database;

class MySQL implements IDatabase
{
    protected $conn;

    function conncet($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        mysql_query($sql, $this->conn);
    }

    function close()
    {
        mysql_close($this->conn);
    }
}
