<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

$obj = Common\Factory::createObj();

echo $obj->test(), PHP_EOL;
