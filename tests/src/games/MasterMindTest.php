<?php

namespace test\games;

use PHPUnit\Framework\TestCase;
use games\MasterMind;

class MasterMindTest extends TestCase
{
    /**
     * @var MasterMind
     */
    private $game;

    protected function setUp()
    {
        parent::setUp();

        $this->game = new MasterMind();
    }

    public function testFirstGuessIsAAAA()
    {
        $this->assertEquals('AAAA', $this->game->guess());
    }

    public function test_ifScoreIsPerfectBreakerYays()
    {
        $this->game->score('++++');

        $this->assertEquals("Yay! I win!", $this->game->guess());
    }

    /**
     * @dataProvider not_perfect_guesses
     */
    public function test_ifScoreIsntPerfectBreakerDoesntYay($aNotPerfectGuess) {
        $this->game->score($aNotPerfectGuess);
        $this->assertNotEquals(
            "Yay! I win!",
            $this->game->guess()
        );
    }

    /**
     * @return array
     */
    public static function not_perfect_guesses()
    {
        return array(
            array('-'),
            array('+'),
            array('++'),
            array('+++'),
            array('---+'),
            array('--+'),
            array('-+'),
            array('-++-'),
            array('-++'),
            array('-+++'),
        );
    }

    public function test_ifScoreIsntPerfectNewGuessIsDifferentFromAllPreviousOnes()
    {
        $firstGuess = $this->game->guess();
        $this->game->score('+');
        $secondGuess = $this->game->guess();
        $this->game->score('+');
        $thirdGuess = $this->game->guess();
        $this->assertNotEquals($firstGuess, $secondGuess);
        $this->assertNotEquals($firstGuess, $thirdGuess);
        $this->assertNotEquals($secondGuess, $thirdGuess);
    }

    public function test_guessesAreValid()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->assertValidGuess($this->game->guess());
        }
    }

    /**
     * @param mixed $guess
     */
    private function assertValidGuess($guess)
    {
        $this->assertEquals(4, strlen($guess));
        $this->assertValidChar($guess[0]);
        $this->assertValidChar($guess[1]);
        $this->assertValidChar($guess[2]);
        $this->assertValidChar($guess[3]);
    }

    /**
     * @param string $char
     */
    private function assertValidChar($char)
    {
        $this->assertTrue($char >= 'A');
        $this->assertTrue($char <= 'F');
    }
}