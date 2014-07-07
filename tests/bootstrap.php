<?php
/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


// turn on all errors
error_reporting(E_ALL);

// autoloader
require dirname(__DIR__) . '/autoload.php';

// default globals
if (is_readable(__DIR__ . '/globals.dist.php')) {
    require __DIR__ . '/globals.dist.php';
}

// override globals
if (is_readable(__DIR__ . '/globals.php')) {
    require __DIR__ . '/globals.php';
}