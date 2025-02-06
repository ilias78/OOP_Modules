<?php

namespace M4opdracht2324;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance; 
    protected string $accountType = "";
     

    public function __construct(string $accountNumber, string $accountHolder , float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

public function getAccountInfo () 
{
    return  "Accountnummer: " . $this->accountNumber . 
            " Accounthouder: " . $this->accountHolder . 
            " Balance: €" . $this->balance;
}

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

    protected function withdraw(float $amount): string
    {
 
        $this->balance -= $amount;
        return "Geld opgenomen";
    }
        
        /**
         * @return float
         */
    

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getType(): string
    {
        return $this->accountType;
    }

    protected function validateWithdrawal(float $amount, float $limit = 0): bool
    {
        $withdrawalLimit = $this->balance + $limit;
        return $withdrawalLimit >= $amount;
    }
        


    }





