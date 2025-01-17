<?php
require_once ('vendor/autoload.php');

use M3opdracht16\BankAccount;
use M3opdracht16\BankList;


$bankList = new BankList();

$account1 = new BankAccount();
$account1->setAccount("NL01INHO0000000001", "Jan", 1000.0, "checking");

$bankList->addAccount($account1);

$account2 = new BankAccount();
$account2->setAccount("NL01INHO0000000002", "Piet", 2000.0, "checking");

$bankList->addAccount($account2);

$account3 = new BankAccount();
$account3->setAccount("NL01INHO0000000003", "Klaas", 3000.0, "checking");

$bankList->addAccount($account3);

$account4 = new BankAccount();
$account4->setAccount("NL01INHO0000000004", "Kees", 4000.0, "checking");

$bankList->addAccount($account4);

$bankList->addAccount($account1);
$bankList->addAccount($account2);
$bankList->addAccount($account3);



foreach ($bankList->getAccounts() as $account) {
   echo "<li>balance = ".$account->getBalance()."</li>";
}








