Test
====

Test writing utilities

### Apiframework\Test\ProtectedReflection

Allows easy testing for protected methods and properties.

```php
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

```

### Output

```
string(19) "hello varOne varTwo"
```
```php

$protected->invokeMethod("addToCache", ['david', 'bowie']);

$cache = $protected->getProperty("cache");

var_dump($cache);
```

### Output

```
array(1) {
  'david' =>
  string(5) "bowie"
}
```
```php

$protected->setProperty("cache", ['fab' => 'four']);

$cache = $protected->getProperty("cache");

var_dump($cache);

```

### Output

```
array(1) {
  'fab' =>
  string(4) "four"
}
