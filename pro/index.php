<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

$obj = new Common\Object();

$obj->title = "hello";

echo $obj->title, PHP_EOL;
echo "\n";

echo $obj->tests("hello", 123);
echo "\n";

echo Common\Object::xxx("world", 123456), PHP_EOL;
echo "\n";

echo $obj, PHP_EOL;
echo "\n";

echo $obj('hello'), PHP_EOL;


