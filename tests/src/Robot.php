<?php

/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Robot
{

    protected $hello = "hello";

    protected $world;

    protected function hello()
    {

        return "hello";
    }

    protected function helloOne($one)
    {

        return "hello $one";
    }

    protected function helloTwo($one, $two)
    {

        return "hello $one $two";
    }

    public function getWorld()
    {

        return $this->world;
    }
} 