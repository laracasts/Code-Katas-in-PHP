<?php

class PaypalAdapter implements shopAdapter {

    private $shop;

    /**
     * @param Shop $shop
     */
    public function __construct(Shop $shop) {
        $this->shop = $shop;
    }

    /**
     * @param $amount
     */
    public function pay($amount) {
        $this->shop->sendPayment($amount);
    }
}