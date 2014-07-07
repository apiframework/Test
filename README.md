Test
====

Test writing utilities

### Apiframework\Test\ProtectedReflection

Allows easy testing for protected methods and properties.

### invokeMethod - Execute a protected method

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

// Accepts an array of arguments equal to the amount of arguments of the method
$helloTwo = $protected->invokeMethod("helloTwo", ['varOne', 'varTwo']);

var_dump($helloTwo);

```

### Output

```
string(19) "hello varOne varTwo"
```

### getProperty - get a protected property of the class

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

### setProperty - set a protected property

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
