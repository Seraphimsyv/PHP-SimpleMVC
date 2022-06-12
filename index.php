<?php

    /**
     * Simple mvc template
     * Author: Kirill Hohlov
     */

    spl_autoload_register(function ($class_name) {
        
        $class_name = strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $class_name));

        require_once $class_name . '.php';

    });

    require 'system' . DIRECTORY_SEPARATOR . 'config.php';
    require 'system' . DIRECTORY_SEPARATOR . 'bootstrap.php';