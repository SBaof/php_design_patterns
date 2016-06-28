<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

echo 3, PHP_EOL;
Common\Factory::createDatabase();
$obj = Common\Register::get('db1');

var_dump($obj);

