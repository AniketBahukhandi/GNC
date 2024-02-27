<?php
function PHPMailerAutoload($classname)
{
    // Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class.' . strtolower($classname) . '.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

// Check if SPL autoloading is available (PHP 5.1.2+)
if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    // SPL autoloading was introduced in PHP 5.1.2

    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        // Register the autoloader with support for case-insensitive class names (PHP 5.3+)
        spl_autoload_register('PHPMailerAutoload', true, true);
    } else {
        // Register the autoloader without support for case-insensitive class names (PHP < 5.3)
        spl_autoload_register('PHPMailerAutoload');
    }
} else {
    // Fall back to traditional autoload for old PHP versions (PHP < 5.1.2)
    function __autoload($classname)
    {
        PHPMailerAutoload($classname);
    }
}
