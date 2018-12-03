<?php

namespace test;

use PHPUnit\Framework\TestCase;
use math\PrimeFactors;

class PrimeFactorsTest extends TestCase
{
    /**
     * @var PrimeFactors
     */
    private $primeFactors;

    protected function setUp()
    {
        parent::setUp();

        $this->primeFactors = new PrimeFactors();
    }

    public function testThatOneDoesNotHavePrimeFactors()
    {
        $this->assertEmpty( $this->primeFactors->generate(1) );
    }

    public function testItComputesPrimeFactorsOf2()
    {
        $this->assertEquals($this->primeFactors->generate(2), [2], 'Prime factors of 2 is not working');
    }

    function testItComputesPrimeFactorsOf3()
    {
        $this->assertEquals($this->primeFactors->generate(3), [3], 'Prime factors of 2 is not working');
    }

    function it_computes_prime_factors_of_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_computes_prime_factors_of_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_computes_prime_factors_of_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    function it_computes_prime_factors_of_8()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_computes_prime_factors_of_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_computes_prime_factors_of_100()
    {
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}