<?php
/**
 * @author Hone Watson
 * @email hone.watson@citrus.com.au
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace Apiframework\Test;


class ProtectedReflectionFactory
{

    /**
     * @param $instance
     * @return \Apiframework\Test\ProtectedReflection
     */
    public function build($instance)
    {

        return new ProtectedReflection($instance, new \ReflectionClass($instance));
    }
} 