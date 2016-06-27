<?php

namespace Common;

class Loader
{
    static function autoload($class)
    {
/*         $file = BASEDIR . '/' . str_replace('\\', '/', $class) . '.php'; */
        // var_dump($file);
        // var_dump(BASEDIR);
        /* var_dump($class); */
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}
