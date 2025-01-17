<?php

namespace M3opdracht17;

class SavingsAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType, float $interestRate)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
        $this->interestRate = $interestRate;
    }

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, float $interestRate): void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): string
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return "Geld opgenomen";
        } else {
            return "Onvoldoende geld op de rekening.<br>";
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
