<?php

define('BASEDIR', __dir__);

include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

/* Common\Object::test(); */
/* App\Controller\Home\Index::test(); */

echo "stack: \n";
$stack = new SplStack();

$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->pop();
echo $stack->pop();
echo "\n";

echo "Queue: \n";
$queue = new SplQueue();

$queue->enqueue("data1\n");
$queue->enqueue("data2\n");

echo $queue->dequeue();
echo $queue->dequeue();
echo "\n";

echo "heap: \n";
$heap = new SplMinheap();

$heap->insert("data1\n");
$heap->insert("data2\n");

echo $heap->extract();
echo $heap->extract();
echo "\n";

echo "array: \n";
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 1234;

var_dump($array);
