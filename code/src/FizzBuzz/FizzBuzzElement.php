<?php

namespace App\FizzBuzz;

abstract class FizzBuzzElement
{
    /**
     * @return string
     */
    abstract protected function printElement(): string;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->printElement();
    }
}
