<?php

class EmailAdapter implements NotificationInterface 
{
	protected $_data;

	/**
	 * @param $data
	 */
	public function setData($data) {
		$this->_data = $data;
	}

	public function sendNotification() {
		$emailClient = new EmailService();
		$emailClient->setTitle($this->_data['title']);
		$emailClient->setMessage($this->_data['message']);
		$emailClient->setFrom($this->_data['from']);
		$emailClient->setTo($this->_data['to']);
		$emailClient->sendEmail();
	}
}
