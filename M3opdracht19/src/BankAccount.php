<?php

namespace M3opdracht19;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance; 
    protected string $accountType = "";


    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function setAccount(string $accountNumber, string $accountHolder, float $balance): void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): string
    {
        if ($this->balance > $amount) {
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

    public function getType(): string
    {
        return $this->accountType;
    }
}


