<?php
namespace Opale\PHPDCD\Writers;

interface WriterInterface
{
    /**
     * @param string $string
     */
    public function write($string);
}
