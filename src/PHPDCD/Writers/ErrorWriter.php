<?php
namespace Opale\PHPDCD\Writers;

class ErrorWriter implements WriterInterface
{
    /**
     * @inheritdoc
     */
    public function write($string)
    {
        fwrite(STDERR, $string);
    }
}
