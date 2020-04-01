<?php

namespace math\mockery;

use math\Calculator;

class MathematicalLibrary
{
    /**
     * @var Calculator
     */
    private $calculator;
    
    /**
     * @var Display 
     */
    private $display;
    
    /**
     * @var DbAccess 
     */
    private $dao;

    /**
     * @param Calculator $calculator
     * @param Display $display
     * @param DbAccess $dao
     */
    public function __construct(Calculator $calculator, Display $display, DbAccess $dao = null)
    {
        $this->calculator = $calculator;
        $this->display = $display;
        $this->dao = $dao;
    }

    /**
     * @param $number
     * @return mixed
     */
    public function double($number)
    {
        $this->calculator->op1 = $number;
        $this->calculator->op2 = $number;
        return $this->calculator->add();
    }

    /**
     * @param $n1
     * @param $n2
     * @return bool
     */
    public function isSumEven($n1, $n2)
    {
        $this->calculator->op1 = $n1;
        $this->calculator->op2 = $n2;
        $sum = $this->calculator->add();

        if ($sum % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $number
     */
    public function displayTriple($number)
    {
        $this->calculator->op1 = $this->double($number);
        $this->calculator->op2 = $number;

        $this->display->show($this->calculator->add());
    }

    /**
     * @param $number
     */
    public function doubleAndSave($number)
    {
        $this->dao->insert($this->double($number));
    }
}