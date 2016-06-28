<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

//$obj = new Common\Database();

$obj = Common\Database::getInstance();
var_dump($obj);
echo "\n";

$conn = Common\Factory::createDatabase();
var_dump($conn);

/* $obj = Common\Factory::createObj(); */

/* echo $obj->test(), PHP_EOL; */
