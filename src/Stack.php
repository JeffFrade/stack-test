<?php

namespace App;

class Stack
{
    /**
     * Stack array
     *
     * @var array
     */
    private $stack;
    
    /**
     * Push value to stack
     *
     * @param string $value
     * @return void
     */
    public function push(string $value): void
    {
        $this->stack[] = $value;
    }

    /**
     * Show the last value on stack
     *
     * @return string
     */
    public function top(): string
    {
        return end($this->stack);
    }

    /**
     * Show the last value from stack and remove this value from stack
     *
     * @return string
     */
    public function pop(): string
    {
        $val = $this->top();
        unset($this->stack[$this->size() - 1]);

        return $val;
    }

    /**
     * Show the size of the stack
     *
     * @return integer
     */
    public function size(): int
    {
        return count($this->stack);
    }

    /**
     * Clear the stack
     *
     * @return void
     */
    public function clear(): void
    {
        $this->stack = [];
    }
}
