<?php

class PrimeFactors {

	/**
	 * @param $number
	 * @return array
	 */
	public function generate($number)
	{
		$primes = [];

		for ($candidate = 2; $number > 1; $candidate++)
		{
			for (; $number % $candidate == 0; $number /= $candidate)
			{
				$primes[] = $candidate;
			}
		}

		return $primes;
	}

}
