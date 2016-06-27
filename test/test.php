<?php

/* require "Test1.php";  */
// require "Test2.php";
//

spl_autoload_register('autoload1');

//function __autoload($class) {
function autoload1 ($class) {
    var_dump($class);
    //require __DIR__ . '/' . strtolower($class) . '.php';
    require __DIR__ . '/' . $class . '.php';
}

Test1::test();
echo "\n";
Test2::test();
echo "\n";


