<?php
/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace Apiframework\Test;


class ProtectedReflection
{
    /**
     * @var mixed
     */
    protected $testClass;

    /**
     * @var \ReflectionClass
     */
    protected $reflection;

    /**
     * @param mixed $testClass
     * @param \ReflectionClass $reflection
     */
    public function __construct($testClass, $reflection)
    {

        $this->testClass = $testClass;
        $this->reflection = $reflection;
    }

    /**
     * @param $method
     * @return \ReflectionMethod
     */
    public function getMethod($method)
    {

        $method = $this->reflection->getMethod($method);
        $method->setAccessible(true);

        return $method;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function getProperty($property)
    {

        $property = $this->reflection->getProperty($property);
        $property->setAccessible(true);

        return $property->getValue($this->testClass);
    }

    /**
     * @param $property
     * @param $value
     */
    public function setProperty($property, $value)
    {

        $property = $this->reflection->getProperty($property);
        $property->setAccessible(true);

        return $property->setValue($this->testClass, $value);
    }

} 