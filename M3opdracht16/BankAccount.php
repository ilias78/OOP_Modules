<?php

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

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
?>

