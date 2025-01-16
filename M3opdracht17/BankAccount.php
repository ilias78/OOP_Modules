<?php

class BankAccount
{
    protected string $accountNumber;  // Changed to protected
    protected string $accountHolder; // Changed to protected
    protected float $balance;        // Changed to protected
    protected string $accountType;   // Changed to protected

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
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



