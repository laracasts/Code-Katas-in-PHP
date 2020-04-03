<?php

class Factory
{
	/**
	 * @param mixed $type
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public static function build($type)
	{
		$class = 'Format' . $type;
		if (!class_exists($class)) {
			throw new Exception('Missing format class.');
		}
		return new $class;
	}
}

class FormatString {

}

class FormatNumber {

}

try {
	$string = Factory::build('String');
} catch (Exception $e) {
	echo $e->getMessage();
}

try {
	$number = Factory::build('Number');
} catch (Exception $e) {
	echo $e->getMessage();
}