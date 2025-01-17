<?php

namespace M3opdracht16;

class BankList
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount $bankAccount): void
    {
        $this->bankAccounts[] = $bankAccount;
    }

/**
 * @return array
 */

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }

    
}

