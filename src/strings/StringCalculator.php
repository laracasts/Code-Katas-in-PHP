<?php

namespace strings;

class StringCalculator
{
	/**
	 * The maximum number that may be added.
	 */
	const MAX_NUMBER_ALLOWED = 1000;

	/**
	 * Add a number
	 * 
	 * @param int $numbers
	 * @return int
	 */
	public function add($numbers)
	{
		$numbers = $this->parseNumbers($numbers);
		$solution = 0;

		foreach ($numbers as $number)
		{
			$this->guardAgainstInvalidNumber($number);

			if ($number >= self::MAX_NUMBER_ALLOWED) continue;

			$solution += $number;
		}

		return $solution;
	}

	/**
	 * Check number
	 * 
	 * @param $number
	 */
	private function guardAgainstInvalidNumber($number)
	{
		if ($number < 0) {
			throw new \InvalidArgumentException("Invalid number provided: {$number}");
		}
	}

	/**
	 * Parse an array using the intval function
	 * 
	 * @param int $numbers
	 * @return array
	 */
	private function parseNumbers($numbers)
	{
		return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
	}
}
