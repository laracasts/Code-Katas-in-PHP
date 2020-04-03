<?php

interface NotificationInterface {

    /**
     * @param $data
     * @return mixed
     */
    public function setData($data);

    public function sendNotification();
}
