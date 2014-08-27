<?php

class StringCalculator {

	/**
	 * The maximum number that may be added.
	 */
	const MAX_NUMBER_ALLOWED = 1000;

	/**
	 * @param $numbers
	 * @return int
	 */
	public function add($numbers)
	{
		$numbers = $this->parseNumbers($numbers);
		$solution = 0 ;

		foreach ($numbers as $number)
		{
			$this->guardAgainstInvalidNumber($number);

			if ($number >= self::MAX_NUMBER_ALLOWED) continue;

			$solution += $number;
		}

		return $solution;
	}

	/**
	 * @param $number
	 */
	private function guardAgainstInvalidNumber($number)
	{
		if ($number < 0)
		{
			throw new InvalidArgumentException("Invalid number provided: {$number}");
		}
	}

	/**
	 * @param $numbers
	 * @return array
	 */
	private function parseNumbers($numbers)
	{
		return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
	}

}
