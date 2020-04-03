<?php

interface ITest {

	public function Links();

	/**
	 * Method required by interface
	 *
	 * @param string $gen
	 * @param string $nota
	 * @return string
	 */
	public function Tutorials($str, $nota);
}

class WebDevelopment implements ITest {

	protected $site = 'www.andreafiori.net';

	/**
	 * Method required by interface
	 *
	 * @return string
	 */
	public function Links() {
		return $this->site;
	}

	/**
	 * @inheritdoc
	 */
	public function Tutorials($gen, $nota) {
		$re = $gen. ' - '. $nota;

		return $re;
	}

	/**
	 * Additional method
	 *
	 * @param string $site
	 */
	public function setSite($site) {
		$this->site = $site;
	}
}

class Languages implements ITest {

	protected $adr = 'www.marplo.net/';

	/**
	 * @return string
	 */
	public function Links() {
		return'Good way';
	}

	/**
	 * @inheritdoc
	 */
	public function Tutorials($gen, $nr) {
		$re = $nr.' - '. $this->adr. $gen;
		return $re;
	}
	
}

/**
 * @param ITest $obj
 */
function courses(ITest $obj) {
	echo '<br />'. $obj->Links();
	echo '<br />'. $obj->Tutorials('php-mysql', 4);
}

courses(new WebDevelopment());
courses(new Languages());