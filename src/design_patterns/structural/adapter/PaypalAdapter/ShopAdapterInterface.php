<?php

interface ShopAdapterInterface {

    /**
     * @param int $amount
     * @return mixed
     */
    public function pay($amount);
}