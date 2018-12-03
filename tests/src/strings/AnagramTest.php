<?php

namespace tests\strings;

use PHPUnit\Framework\TestCase;
use strings\Anagram;

class AnagramTest extends TestCase
{
    protected function setUp()
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