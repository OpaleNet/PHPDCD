<?php

require __DIR__.'/vendor/autoload.php';

use Opale\PHPDCD\Engine;
use Opale\PHPDCD\Formatter;
use \Opale\PHPDCD\Writers\DefaultWriter;
use \Opale\PHPDCD\Writers\ErrorWriter;

set_error_handler('error_handler');
date_default_timezone_set('UTC');
ini_set('memory_limit', -1);

function error_handler($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr, $errno, $errno, $errfile, $errline);
}

$config = json_decode(file_get_contents('/config.json'), true);
$engine = new Engine($config, new Formatter(), new DefaultWriter(), new ErrorWriter());
$engine->run();