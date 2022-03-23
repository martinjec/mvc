<?php

spl_autoload_register('autlo');


function autlo($class)
{
    $path = "../" . strtolower(str_replace('\\', '/', $class . '.php'));
    if (file_exists($path)) {
        require $path;
    }
}
