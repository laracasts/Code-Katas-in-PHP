<?php

class Database {

	/**
	 * Used to store and provide instances for the getInstance() method
	 */ 
	private static $instances = array();
 
	/**
	 * Hidden constructor, only callable from within this class
	 */
	private function __construct() { }
 
	/**
	 * Create a new instance if one doesn't exist with the key provided.
	 * Once an instance has been created, or if it was already created, return it.
	 * @param $key the key which the instance should be stored/retrieved
	 * @return self
	 */
	public static function getInstance($key) {
 
		// Check if an instance exists with this key already
		if(!array_key_exists($key, self::$instances)) {
			// instance doesn't exist yet, so create it
			self::$instances[$key] = new self();
		}
 
		// Return the correct instance of this class
		return self::$instances[$key];
	}
 
	/**
	 * Hidden magic clone method, make sure no instances of this class 
	 * can be cloned using the clone keyword
	 */
	private function __clone() { }
	
}

// Create first instance to the master database
$master = Database::getInstance('master');
var_dump($master); // object(Database)#1 (0) { }

// Create second instance of this class for a logger database
$logger = Database::getInstance('logger');
var_dump($logger); // object(Database)#2 (0) { }

// Retrieve the existing 'master' instance from the multiton
// this would normally be done in script, which doesn't have the instance already
$masterDupe = Database::getInstance('master');
var_dump($masterDupe); // object(Database)#1 (0) { }
 
// Database objects cannot be initialise with the new keyword, doing so will cause fatal errors
// Fatal error: Call to private Database::__construct() from invalid context
// $dbFatalError = new Database();

// Database objects cannot be cloned, doing so will cause a fatal error
// PHP Fatal error:  Call to private Database::__clone()
// $dbCloneError = clone $masterDupe;