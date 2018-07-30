<?php

namespace App\Config\Loaders;

class ArrayLoader implements ILoader
{
    protected $files;
    
    public function __construct(array $files)
    {
        $this->files = $files;
    }
}
