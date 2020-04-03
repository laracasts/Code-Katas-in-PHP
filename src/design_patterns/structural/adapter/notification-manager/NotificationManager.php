<?php

class NotificationManager {

	/**
	 * @param string $type
	 * @param $data
	 * @return bool
	 */
	public function sendNotification($type = '', $data)
	{
		switch($type) {

		case "email":
			$notification = new EmailAdapter();
		break;

		case "twitter":
			$notification = new TwitterAdapter();
		break;

		case "sms":
			$notification = new SmsAdapter();
		break;

		default:
			// Do something to log an exception 
			return false;
		break;

		}

		$notification->setData($data);
		$notification->sendNotification();
	}
}

