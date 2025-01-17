<?php
require_once('vendor/autoload.php');

use M3opdracht17\BankAccount;
use M3opdracht17\BankList;
use M3opdracht17\CheckingAccount;
use M3opdracht17\SavingsAccount;

$bankList = new BankList();

// BankAccount
$account1 = new BankAccount();
$account1->setAccount("NL01INHO0000000001", "Jan", 1000.0, "checking");
$bankList->addAccount($account1);

$account2 = new BankAccount();
$account2->setAccount("NL01INHO0000000002", "Piet", 2000.0, "checking");
$bankList->addAccount($account2);

// SavingsAccount
$account3 = new SavingsAccount("NL01INHO0000000003", "Klaas", 3000.0, "savings", 1.2);
$bankList->addAccount($account3);

// CheckingAccount
$account4 = new CheckingAccount();
$account4->setAccount("NL01INHO0000000004", "Kees", 4000.0, 50.0);
$bankList->addAccount($account4);

// Output all account balances
foreach ($bankList->getAccounts() as $account) {
    echo "<li>Balance: €" . $account->getBalance() . "</li>";
   
    
   
    
}
var_dump($bankList);
    
