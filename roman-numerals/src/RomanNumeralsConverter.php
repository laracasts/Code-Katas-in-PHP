<?php

class RomanNumeralsConverter {

	/**
	 * @var array
	 */
	protected static $lookup = [
		1000 => 'M',
		500  => 'D',
		100  => 'C',
		50   => 'L',
		10   => 'X',
		5    => 'V',
		1    => 'I'
	];

	/**
	 * @param $number
	 * @return string
	 */
	public function convert($number)
	{
		$this->guardAgainstInvalidNumber($number);

		$solution = '';

        $lookup = $this->addSubtractionGlyphs(static::$lookup);

		foreach ($lookup as $limit => $glyph)
		{
			while ($number >= $limit)
			{
				$solution .= $glyph;
				$number -= $limit;
			}
		}

		return $solution;
	}

    /**
     * @param $lookup
     * @return array
     */
    private function addSubtractionGlyphs($lookup) {

        $i=0;
        $newGlyphs = [];
        $lookup = array_reverse($lookup,true);

        // create the new substraction glyphs

        foreach ($lookup as $number=>$glyph):

           if (isset($prevGlyph)):
                $roman = $prevGlyph . $glyph;
                if ($i%2) $substract = $number/5;
                $num = $number - $substract;
                $newGlyphs[$num] = $roman;
            endif;

            if ($i%2==0) $prevGlyph = $glyph;

            $i++;

        endforeach;

        // merge the arrays and sort in descending order

        $lookup = $lookup + $newGlyphs;
        krsort($lookup);

        return $lookup;

    }

	/**
	 * @param $number
	 */
	private function guardAgainstInvalidNumber($number)
	{
		if ($number <= 0)
		{
			throw new InvalidArgumentException;
		}
	}

}
