<?php

/*
 * Facade design pattern
 * A facade is an object that provides a simplified interface to a larger body of code,
 *  such as a class library. A facade can:
 *   make a software library easier to use, understand and test,
 * since the facade has convenient methods for common tasks;
 *  make the library more readable, for the same reason;
 *   reduce dependencies of outside code on the inner workings of a library,
 * since most code uses the facade, thus allowing more flexibility in developing the system;
 *   wrap a poorly designed collection of APIs with a single well-designed API (as per task needs).
 * (Source:Wikipedia)
 * See also : Specification design pattern and adapter pattern
 */

class PurchaseFacade {

	protected $inventory;
	protected $credit;

	public function __construct($inventory, $credit) {
		$this->inventory = $inventory;
		$this->credit = $credit;
	}

	public function buy($produce, $moneyAmount) {

		if ($this->inventory->inStock($produce) && $this->credit->hasCredit($moneyAmount)) {
			echo "purchase accepted";
		}
	}
}

class Inventory {

	public function inStock($produce) {
		return true;
	}
}

class Credit {

	public function hasCredit($moneyAmount) {
		return true;
	}
}

$purchase = new PurchaseFacade(new Inventory(), new Credit());

$purchase->buy('apple', '10');
