 <?php
 
/**
 * Adapter (wrapper) design pattern
 */
class Shop
{
	public $shopName = 'My shop';

	public function getShop()
	{
		return $this->shopName;
	}
}

class ShopAdapter
{
	protected $shop;

	public function __construct(shop $shop)
	{
		$this->shop = $shop;
	}

	public function getShopName()
	{
		return $this->shop->getShop();
	}
}


$shopAdapter = new ShopAdapter(new Shop());

echo $shopAdapter->getShopName();
