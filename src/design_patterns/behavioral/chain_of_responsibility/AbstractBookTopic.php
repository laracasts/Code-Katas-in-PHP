<?php

namespace design_patterns\behavioral\chain_of_responsibility;

abstract class AbstractBookTopic {

	abstract function getTopic();

	abstract function getTitle();

	/**
	 * @param string $title_in
	 * @return mixed
	 */
	abstract function setTitle($title_in);
}