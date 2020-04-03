<?php

class Adder
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

class Subtractor
{
    /**
     * @param number $a
     * @param number $b
     * @return mixed
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }
}

class Multiplier
{
    /**
     * @param number $a
     * @param number $b
     * @return number
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

class Divider
{
    /**
     * @param $a
     * @param $b
     * @return float
     * @throws Exception
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new Exception('Division by zero.');
        }

        return $a / $b;
    }
}

class CalculatorFacade
{
    /**
     * @param Adder $adder
     * @param Subtractor $subtractor
     * @param Multiplier $multiplier
     * @param Divider $divider
     */
    public function __construct(Adder $adder, Subtractor $subtractor, Multiplier $multiplier, Divider $divider)
    {
        $this->_adder = $adder;
        $this->_subtractor = $subtractor;
        $this->_multiplier = $multiplier;
        $this->_divider = $divider;
    }

    /**
     * @param $expression
     * @return float|mixed|number
     * @throws Exception
     */
    public function calculate($expression)
    {
        list ($a, $operator, $b) = explode(' ', $expression);

        switch ($operator) {
            case '+':
                return $this->_adder->add($a, $b);
            break;

            case '-':
                return $this->_subtractor->subtract($a, $b);
            break;

            case '*':
                return $this->_multiplier->multiply($a, $b);
            break;

            case '/':
                return $this->_divider->divide($a, $b);
            break;
        }
    }
}

class CalculatorFactory
{
    /**
     * @return CalculatorFacade
     */
    public function getCalculator()
    {
        return new CalculatorFacade(new Adder(), new Subtractor(), new Multiplier(), new Divider());
    }
}

$adder = new Adder();
echo '254 + 113 = ', $adder->add(254, 113), "<br>";
$divider = new Divider();
echo '256 / 8 = ', $divider->divide(256, 8), "<br>";

$calculatorFactory = new CalculatorFactory;
$calculator = $calculatorFactory->getCalculator();
echo '254 + 113 = ', $calculator->calculate('254 + 113'), "\n";
echo '256 / 8 = ', $calculator->calculate('256 / 8'), "\n";