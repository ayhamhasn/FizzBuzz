<?php

namespace App\FizzBuzz;

class FizzBuzzIterator implements \Iterator
{
    private int $from;
    private int $to;
    private int $number;
    private FizzBuzzFactory $factory;

    /**
     * @param int $from
     * @param int $to
     * @param array $multipliers
     */
    public function __construct(int $from, int $to, array $multipliers)
    {
        $this->from = $from;
        $this->to = $to;
        $this->factory = new FizzBuzzFactory($multipliers);
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->factory->create($this->number);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->number = $this->from;
    }

    /**
     * @return mixed
     */
    public function key(): mixed
    {
        return null;
    }

    /**
     * @return void
     */
    public function next(): void
    {
        ++$this->number;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return $this->number <= $this->to;
    }
}