<?php

namespace M4opdracht2324;

use M4opdracht2324\BankAccount;         
use M4opdracht2324\SavingsAccount;
use M4opdracht2324\CheckingAccount;


class BankList
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount|SavingsAccount|CheckingAccount $bankAccount): void
    {
        $this->bankAccounts[] = $bankAccount;
    }

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }
}


