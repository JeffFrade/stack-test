<?php

namespace Test;

use App\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    /**
     * Test push and size from stack
     *
     * @return void
     */
    public function testPushAndSizeStack()
    {
        $stack = new Stack;
        $stack->push('First');

        $this->assertInstanceOf(Stack::class, $stack);
        $this->assertEquals(1, $stack->size());
    }

    /**
     * Test top from stack
     *
     * @return void
     */
    public function testTopStack()
    {
        $stack = new Stack;
        $stack->push('First');
        $stack->push('Second');

        $this->assertEquals('Second', $stack->top());
    }

    /**
     * Test pop from stack
     *
     * @return void
     */
    public function testPopStack()
    {
        $stack = new Stack;
        $stack->push('First');
        $stack->push('Second');
        $stack->push('Third');

        $this->assertEquals('Third', $stack->pop());
        $this->assertEquals(2, $stack->size());
    }

    /**
     * Test clear from stack
     *
     * @return void
     */
    public function testClearStack()
    {
        $stack = new Stack;
        $stack->push('First');
        $stack->push('Second');
        $stack->push('Third');
        $stack->push('Fourth');

        $stack->clear();
        $this->assertEquals(0, $stack->size());
    }
}
