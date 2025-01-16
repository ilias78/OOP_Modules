<?php

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, "savings");
        $this->interestRate = $interestRate;
    }

    public function calculateInterest(): float
    {
        return $this->balance * $this->interestRate;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getAccountDetails(): string
    {
        return "Account Number: {$this->accountNumber}, Holder: {$this->accountHolder}, Balance: {$this->balance}, Type: {$this->accountType}";
    }
}

