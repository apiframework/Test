<?php
/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Inspired by here https://github.com/jenwachter/phpunit-test-skelaton
 */


namespace Apiframework\Test;


class ProtectedReflection implements ProtectedReflectionInterface
{
    /**
     * @var mixed
     */
    protected $TestClass;

    /**
     * @var \ReflectionClass
     */
    protected $ReflectionClass;

    /**
     * @param mixed $TestClass
     * @param \ReflectionClass $ReflectionClass
     */
    public function __construct($TestClass, $ReflectionClass)
    {

        $this->TestClass = $TestClass;
        $this->ReflectionClass = $ReflectionClass;
    }

    /**
     * @param $method
     * @return \ReflectionMethod
     */
    public function getMethod($method)
    {

        $method = $this->ReflectionClass->getMethod($method);
        $method->setAccessible(true);

        return $method;
    }

    /**
     * @param $method
     * @param array $params
     * @return mixed
     */
    public function invokeMethod($method, $params = array())
    {

        $method = $this->getMethod($method);
        $params = array_merge([$this->TestClass], $params);
        return call_user_func_array(array($method, "invoke"), $params);
    }


    /**
     * @param $property
     * @return mixed
     */
    public function getProperty($property)
    {

        $property = $this->ReflectionClass->getProperty($property);
        $property->setAccessible(true);

        return $property->getValue($this->TestClass);
    }

    /**
     * @param $property
     * @param $value
     */
    public function setProperty($property, $value)
    {

        $property = $this->ReflectionClass->getProperty($property);
        $property->setAccessible(true);

        return $property->setValue($this->TestClass, $value);
    }

} 