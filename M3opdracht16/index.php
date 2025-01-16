<?php
require_once 'BankAccount.php';
require_once 'BankList.php';


$account1 = new BankAccount("NL01INHO0000000001", "Jan", 1000.0, "savings");
$account2 = new BankAccount("NL01INHO0000000002", "Piet", 2000.0, "checking");
$account3 = new BankAccount("NL01INHO0000000003", "Klaas", 3000.0, "savings");


$bankList = new BankList();
$bankList->addAccount($account1);
$bankList->addAccount($account2);
$bankList->addAccount($account3);

echo "<h2>Bank Accounts</h2>";
$bankList->printAccounts();





