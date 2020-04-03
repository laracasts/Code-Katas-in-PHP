<?php

include_once("Pizza.php");
include_once("PizzaBuilder.php");
include_once("HawaiianPizzaBuilder.php");
include_once("SpicyPizzaBuilder.php");
include_once("Waiter.php");

$oWaiter               = new Waiter();
$oHawaiianPizzaBuilder = new HawaiianPizzaBuilder();
$oSpicyPizzaBuilder    = new SpicyPizzaBuilder();

?>
<html>
    <head>
        <title></title>
    </head>
<body>
    <h1>Pizza Builder (pattern) test</h1>
    <?php

    $oWaiter->setPizzaBuilder($oHawaiianPizzaBuilder);
    $oWaiter->constructPizza();

    $pizza = $oWaiter->getPizza();
    $pizza->showIngredients();

    echo "<br/>";

    $oWaiter->setPizzaBuilder($oSpicyPizzaBuilder);
    $oWaiter->constructPizza();

    $pizza = $oWaiter->getPizza();
    $pizza->showIngredients();

    ?>
</body>
</html>