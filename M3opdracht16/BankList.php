<?php

class BankList
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount $bankAccount): void
    {
        $this->bankAccounts[] = $bankAccount;
    }

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }

    public function printAccounts(): void
    {
        foreach ($this->bankAccounts as $account) {
            echo $account->getAccountDetails() . "<br>";
        }
    }
}

