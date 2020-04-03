<?php
header('Content-type:text/plain; charset=utf-8');

class Fruit {
	private $type;
	private static $types = array();

	private function __construct($type) {
		$this->type = $type;
	}

	public static function getFruit($type) {
		// Lazy initialization takes place here
		if (!isset(self::$types[$type])) {
			self::$types[$type] = new Fruit($type);
		}

		return self::$types[$type];
	}

	public static function printCurrentTypes() {
		echo 'Number of instances made: ' . count(self::$types) . "\n";
		foreach (array_keys(self::$types) as $key) {
			echo "$key\n";
		}
		echo "\n";
	}
}

Fruit::getFruit('Apple');
Fruit::printCurrentTypes();

Fruit::getFruit('Banana');
Fruit::printCurrentTypes();

Fruit::getFruit('Apple');
Fruit::printCurrentTypes();