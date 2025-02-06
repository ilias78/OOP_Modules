<?php

$simpleAutoload = function (string $classname)
{
if (file_exists(filename: " {$classname}.php")) {
    require_once "{$classname}.php";
}
};

spl_autoload_register($simpleAutoload);

$bankAccount = new BankAccount();

var_dump($bankAccount);