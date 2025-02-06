<?php

namespace M4opdracht2728;

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


