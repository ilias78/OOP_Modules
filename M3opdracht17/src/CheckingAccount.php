<?php

namespace M3opdracht17;

class CheckingAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private float $overdraftLimit;

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit): void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->overdraftLimit = $overdraftLimit;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): string
    {
        if ($this->balance + $this->overdraftLimit >= $amount) {
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
