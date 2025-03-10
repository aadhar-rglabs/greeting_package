<?php

namespace Aadhar\Greeting;

class GreetingService
{
    public function greet($name)
    {
        return "Hello, " . $name;
    }
}