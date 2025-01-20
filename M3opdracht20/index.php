<?php
require_once('vendor/autoload.php');

use M3opdracht20\BankAccount;
use M3opdracht20\BankList;
use M3opdracht20\CheckingAccount;
use M3opdracht20\SavingsAccount;

$bankList = new BankList();


$account1 = new BankAccount();
$account1->setAccount("NL01INHO0000000001", "Jan", 1000.0);
$bankList->addAccount($account1);

$account2 = new BankAccount();
$account2->setAccount("NL01INHO0000000002", "Piet", 2000.0);
$bankList->addAccount($account2);

$account3 = new SavingsAccount();
$account3->setAccount("NL01INHO0000000003", "Klaas", 3000.0);
$account3->setInterestRate(1.2);
$account3->setType();
$bankList->addAccount($account3);


$account4 = new CheckingAccount();
$account4->setOverdraftLimit(50.0);
$account4->setAccount("NL01INHO0000000004", "Kees", 4000.0, 50.0);
$account4->setType();
$bankList->addAccount($account4);
echo $account4->withdraw(amount : 2000.0);



echo "<table border='1'>
<tr>
    <th>Account Number</th>
    <th>Account Holder</th>
    <th>Balance</th>
</tr>";

foreach ($bankList->getAccounts() as $account) {
    echo "<tr>";
    echo "<td>" . $account->getAccountNumber() . "</td>";
    echo "<td>" . $account->getAccountHolder() . "</td>";
    echo "<td>" . $account->getBalance() . "</td>";
    echo "<td>" . $account->getType() . "</td>";
    echo "</tr>";
}
echo "</table>";


var_dump($bankList);