<?php

namespace App\FizzBuzz;

class WordFizzBuzzElement extends FizzBuzzElement
{
    private string $word;

    /**
     * @param string $word
     */
    public function __construct(string $word)
    {
        $this->word = $word;
    }

    /**
     * @return string
     */
    public function printElement(): string
    {
        return $this->word;
    }
}