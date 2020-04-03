<?php

/*
 * Decorator design pattern
 * alternative to simple inheritance
 * similar to proxy pattern
 */
class Shop {

    public $shopName = 'My shop';

    public function getShopName(){
        return $this->shopName;
    }
}

class ShopDecorator {
    protected $shop;

    public function __construct(shop $shop) {
        $this->shop = $shop;
    }

    public function getDecoratedShopName(){
        return '=== '.$this->shop->getShopName().' ===';
    }
}


$shopDecorator = new ShopDecorator(new Shop());

echo $shopDecorator->getDecoratedShopName();
