<?php

/*
 * This file is part of the Text_LanguageDetect package.
 *
 */

spl_autoload_register(function($class)
{
    $file = __DIR__.'/../lib/'.strtr($class, '\\', '/').'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
});