<?php

declare(strict_types=1);


if (!isset($argv[1]) || !is_numeric($n = $argv[1]) || $n <= 0) {
    echo 'Please provide a valid number greater than 0';
    exit;
}

echo 'FizzBuzz for numbers 1 to ' . $n . PHP_EOL;

for ($number = 1; $number <= $n; $number++) {
    echo $number . ' : ' . fizzBuzz($number) . PHP_EOL;
}

function fizzBuzz(int $number): string
{
    return match (true) {
        0 === $number % 3 && 0 === $number % 5 => 'FizzBuzz',
        0 === $number % 3 => 'Fizz',
        0 === $number % 5 => 'Buzz',
        default => (string)$number,
    };
}
