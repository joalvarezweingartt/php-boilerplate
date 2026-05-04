<?php

use App\Example\Greeter;

it('greets with a name', function () {
    $greeter = new Greeter();
    $result = $greeter->sayHello('World');

    expect($result)->toBe('Hello, World! Welcome to PHP 8.3.');
});

it('greets another name', function () {
    $greeter = new Greeter();

    expect($greeter->sayHello('PHP'))->toBe('Hello, PHP! Welcome to PHP 8.3.');
});
