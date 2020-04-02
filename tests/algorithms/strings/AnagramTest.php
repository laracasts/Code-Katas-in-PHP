<?php

namespace tests\algorithms\strings;

use PHPUnit\Framework\TestCase;
use algorithms\strings\Anagram;

class AnagramTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testIsAnagramIsTrue()
    {
        $this->assertTrue( Anagram::isAnagram('argentino', 'ignorante') );
    }

    public function testIsAnagramIsFals()
    {
        $this->assertFalse( Anagram::isAnagram('argentino', 'ignorant') );
    }
}