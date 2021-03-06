<?php

namespace App\Structures;

use App\Exceptions\StackEmptyException;

class Stack
{
    /**
     * Stack array
     *
     * @var array
     */
    private $stack = [];
    
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
        $this->verifyIfStackIsEmpty();

        return end($this->stack);
    }

    /**
     * Show the last value from stack and remove this value from stack
     *
     * @return string
     */
    public function pop(): string
    {
        $this->verifyIfStackIsEmpty();

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
        $this->verifyIfStackIsEmpty();

        return count($this->stack);
    }

    /**
     * Clear the stack
     *
     * @return void
     */
    public function clear(): void
    {
        $this->verifyIfStackIsEmpty();

        $this->stack = [];
    }

    /**
     * Verify if stack is empty
     * 
     * @throws StackEmptyException
     * @return void
     */
    protected function verifyIfStackIsEmpty(): void
    {
        if ($this->size() <= 0) {
            throw new StackEmptyException('Stack is empty');
        }
    }
}
