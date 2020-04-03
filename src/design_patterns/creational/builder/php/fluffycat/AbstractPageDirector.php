<?php

abstract class AbstractPageDirector {

	/**
	 * @param AbstractPageBuilder $builder_in
	 */
	abstract function __construct(AbstractPageBuilder $builder_in);

	abstract function buildPage();

	abstract function getPage();

}
