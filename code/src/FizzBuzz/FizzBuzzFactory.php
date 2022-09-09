<?php

namespace App\FizzBuzz;

class FizzBuzzFactory
{
    private array $multipliers = array();

    /**
     * @param array $multipliers
     */
    public function __construct(array $multipliers)
    {
        $this->multipliers = $multipliers;
        krsort($this->multipliers);
    }

    /**
     * @param int $number
     * @param int $multiplier
     * @return bool
     */
    public static function check(int $number, int $multiplier): bool
    {
        return !($number % $multiplier);
    }

    /**
     * @param int $number
     * @return NumberFizzBuzzElement|WordFizzBuzzElement
     */
    public function create(int $number): object
    {
        foreach ($this->multipliers as $multiplier => $word) {
            if (self::check($number, $multiplier)) {
                return new WordFizzBuzzElement($word);
            }
        }

        return new NumberFizzBuzzElement($number);
    }
}