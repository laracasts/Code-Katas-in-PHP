<?php

class SmsAdapter implements NotificationInterface
{
	protected $_data;

	/**
	 * @param $data
	 */
	public function setData($data) {
		$this->_data = $data;
	}

	public function sendNotification()
	{
		$smsClient = new SmsService();
		$smsClient->setRecipient($this->_data['recipient']);
		$smsClient->setMessage($this->_data['message']);
		$smsClient->sendText();
	}
}

