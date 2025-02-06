<?php

namespace M4opdracht2526;

// use M4opdracht2526\BankAccount;         
// use M4opdracht2526\SavingsAccount;
// use M4opdracht2526\CheckingAccount;


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


