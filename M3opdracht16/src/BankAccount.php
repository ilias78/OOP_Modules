<?php

namespace M3opdracht16;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, string $accountType) : void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function deposit(float $amount): void
    {
        //$this->balance = $this->balance + $amount;
        $this->balance += $amount;
    }

    public function withdraw(float $amount): string
    {
        if ($this-> $this->balance > $amount) {
            $this->balance -= $amount;
            return "Geld opgenomen";
        }else{
            return "Onvoldoende geld op de rekening." . "<br>";
        }
       
    }

    /**
     * @return float
     */

    public function getBalance(): float
    {
        return $this->balance;
    }
}

    

