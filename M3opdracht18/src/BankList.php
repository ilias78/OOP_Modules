<?php

namespace M3opdracht18;

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


