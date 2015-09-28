<?php

require __DIR__.'/vendor/autoload.php';

use Opale\PHPDCD\Engine;
use Opale\PHPDCD\Formatter;
use \Opale\PHPDCD\Writers\DefaultWriter;
use \Opale\PHPDCD\Writers\ErrorWriter;

set_error_handler(
    function ($errorNumber, $errorMessage, $errorFile, $errorLine) {
        throw new ErrorException($errorMessage, $errorNumber, $errorNumber, $errorFile, $errorLine);
    }
);
date_default_timezone_set('UTC');
ini_set('memory_limit', -1);


$config = json_decode(file_get_contents('/config.json'), true);
$engine = new Engine($config, new Formatter(), new DefaultWriter(), new ErrorWriter());
$engine->run();
