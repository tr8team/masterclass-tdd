<?php

require __DIR__ . '/vendor/autoload.php';

use Src\FizzBuzz;
use Src\Runner;

$fb = new FizzBuzz();
$runner = new Runner($fb);

$runner->run();