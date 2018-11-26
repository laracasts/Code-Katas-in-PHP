<?php

namespace tests\strings;

use strings\Anagram;

class AnagramTest extends \PHPUnit_Framework_TestCase
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