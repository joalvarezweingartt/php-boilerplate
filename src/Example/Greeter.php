<?php

declare(strict_types=1);

namespace App\Example;

class Greeter
{
    public function sayHello(string $name): string
    {
        return "Hello, {$name}! Welcome to PHP 8.3.";
    }
}
