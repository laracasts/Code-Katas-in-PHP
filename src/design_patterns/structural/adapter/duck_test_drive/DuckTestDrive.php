<?php

include_once("mallardDuck.php");
include_once("wildTurkey.php");
include_once("turkeyAdapter.php");

class DuckTestDrive
{
    public static function main() {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);
        
        echo("The turkey says ...");
        $turkey->gobble();
        echo("<br />");
        $turkey->fly();
        echo("<br />");
        
        echo("The duck says ...");
        self::testDuck($duck);
        echo("<br />");
        
        echo("The turkey adapter says ...");
        self::testDuck($turkeyAdapter);
        echo("<br />");
    }

    /**
     * @param Duck $duck
     */
    private static function testDuck(Duck $duck) {
        $duck->quack();
        echo("<br />");
        $duck->fly();
    }
}

DuckTestDrive::main();
