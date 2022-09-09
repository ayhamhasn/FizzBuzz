<?php

namespace App\FizzBuzz;

class NumberFizzBuzzElement extends FizzBuzzElement
{
    private int $number;

    /**
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    protected function printElement(): string
    {
        return (string) $this->number;
    }
}