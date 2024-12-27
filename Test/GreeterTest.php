<?php

namespace Test;

use Classes\Greeter;
use PHPUnit\Framework\TestCase;
final class GreeterTest extends TestCase
{
    public function testGreetWithName() : void
    {
        $greeter = new Greeter();

        $greeting = $greeter->greet('John');

        $this->assertSame('Hello,  John', $greeting);
    }
}