<?php
/**
 * @author Hone Watson
 * @email code@hone.be
 * @copyright  Copyright (c) 2013 Hone Watson
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

spl_autoload_register(
    function ($class) {

        // a partial filename
        $part = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        // directories where we can find classes
        $dirs = array(
            __DIR__ . DIRECTORY_SEPARATOR . 'src',
            __DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'src',
        );

        // go through the directories to find classes
        foreach ($dirs as $dir) {
            $file = $dir . DIRECTORY_SEPARATOR . $part;
            if (is_readable($file)) {
                require $file;
                return;
            }
        }
    }
);