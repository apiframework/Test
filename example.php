<?php

include "./autoload.php";

class Robot
{

    protected $cache = [];

    public function addToCache($key, $value) {
        $this->cache[$key] = $value;
    }

    protected function helloTwo($one, $two)
    {
        return "hello $one $two";
    }

}

$robot = new Robot;

$protected = (new Apiframework\Test\ProtectedReflectionFactory)->build($robot);

$helloTwo = $protected->invokeMethod("helloTwo", ['varOne', 'varTwo']);

var_dump($helloTwo);

$protected->invokeMethod("addToCache", ['david', 'bowie']);

$cache = $protected->getProperty("cache");

var_dump($cache);

$protected->setProperty("cache", ['fab' => 'four']);

$cache = $protected->getProperty("cache");

var_dump($cache);
