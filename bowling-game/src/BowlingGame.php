<?php

class BowlingGame {

	/**
	 * The number of frames in a game.
	 *
	 * @var integer
	 */
	const FRAMES_PER_GAME = 10;

	/**
	 * All registered rolls for a game.
	 *
	 * @var array
	 */
	protected $rolls = [];

	/**
	 * Roll a ball.
	 *
	 * @param $pins
	 */
	public function roll($pins)
	{
		$this->guardAgainstInvalidRoll($pins);

		$this->rolls[] = $pins;
	}

	/**
	 * Calculate the final score for a game.
	 *
	 * @return int
	 */
	public function score()
	{
		$score = 0;
		$roll = 0;

		for ($frame = 1; $frame <= self::FRAMES_PER_GAME; $frame++)
		{
			if ($this->isStrike($roll))
			{
				$score += 10 + $this->strikeBonus($roll);
				$roll += 1;
			}

			elseif ($this->isSpare($roll))
			{
				$score += 10 + $this->spareBonus($roll);
				$roll += 2;
			}
			else
			{
				$score += $this->getDefaultFrameScore($roll);
				$roll += 2;
			}

		}

		return $score;
	}

	/**
	 * Did the player make a spare?
	 *
	 * @param $roll
	 * @return bool
	 */
	private function isSpare($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
	}

	/**
	 * Did the player make a strike?
     *
	 * @param $roll
	 * @return bool
	 */
	private function isStrike($roll)
	{
		return $this->rolls[ $roll ] == 10;
	}

	/**
	 * Get the default sum of the two rolls for a frame.
	 *
	 * @param $roll
	 * @return mixed
	 */
	private function getDefaultFrameScore($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1];
	}

	/**
	 * Get the bonus for a strike in a frame.
	 *
	 * @param $roll
	 * @return mixed
	 */
	private function strikeBonus($roll)
	{
		return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
	}

	/**
	 * Get the bonus for a spare in a frame.
	 *
	 * @param $roll
	 * @return mixed
	 */
	private function spareBonus($roll)
	{
		return $this->rolls[$roll + 2];
	}

	/**
	 * All rolls must valid.
	 *
	 * @param $pins
	 */
	private function guardAgainstInvalidRoll($pins)
	{
		if ($pins < 0)
		{
			throw new InvalidArgumentException;
		}
	}

}
