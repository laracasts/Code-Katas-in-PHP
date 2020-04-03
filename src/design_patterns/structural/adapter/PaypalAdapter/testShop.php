<?php

include_once("ShopAdapterInterface.php");
include_once("PaypalAdapter.php");
include_once("Shop.php");

$paypal = new PaypalAdapter(new Shop());
$paypal->pay('2629');