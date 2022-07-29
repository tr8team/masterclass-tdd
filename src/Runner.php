<?php

namespace Src;

class Runner
{

    private FizzBuzz $fb;

    public function __construct(FizzBuzz $fb)
    {
        $this->fb = $fb;
    }

    public function run(): void
    {
        $input = readline("Input a number: ");
        $output = $this->fb->run($input);
        $log = "The input '$input' returns a FizzBuzz of '$output'\n";
        echo $log;
    }
}