<?php
/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace Apiframework\Test;


interface ProtectedReflectionInterface
{
    public function __construct($TestClass, $ReflectionClass);

    public function getMethod($method);

    public function invokeMethod($method, $params);

    public function getProperty($property);

    public function setProperty($property, $value);
}