<?php
require_once 'BankAccount.php';
require_once 'BankList.php';
require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';

$account1 = new BankAccount("NL01INHO0000000001", "Jan", 1000.0, "savings");
$account2 = new BankAccount("NL01INHO0000000002", "Piet", 2000.0, "checking");
$account3 = new BankAccount("NL01INHO0000000003", "Klaas", 3000.0, "savings");

$account4 = new SavingsAccount("NL01INHO0000000004", "Kees", 4000.0, 0.03);
$account5 = new CheckingAccount("NL01INHO0000000005", "Karel", 5000.0, 1000.0);

$bankList = new BankList();
$bankList->addAccount($account1);
$bankList->addAccount($account2);
$bankList->addAccount($account3);
$bankList->addAccount($account4); // Works because SavingsAccount extends BankAccount
$bankList->addAccount($account5); // Works because CheckingAccount extends BankAccount

echo "<h2>Bank Accounts</h2>";
$bankList->printAccounts();





