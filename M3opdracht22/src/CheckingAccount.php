<?php

namespace M3opdracht22;

class CheckingAccount extends BankAccount
{
     private float $overdraftLimit;

     public function setType(): void
     {
         $this->accountType = "checking";
     }
    

     public function setOverdraftLimit(float $overdraftLimit): void
     {
         $this->overdraftLimit = $overdraftLimit;
     }


    public function withdraw(float $amount): string
    {
        if($this->validateWithdrawal($amount, $this->overdraftLimit)){
           
            return parent:: withdraw($amount);
        } 
        return "Je hebt onvoldoende geld om dit bedrag op te nemen";
    }
    public function getAccountInfo() : string
    {
        return parent::getAccountInfo() . " overdraft Limit: " . $this->overdraftLimit . "";
    }
}


    // public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType, float $interestRate)
    // {
    //     $this->accountNumber = $accountNumber;
    //     $this->accountHolder = $accountHolder;
    //     $this->balance = $balance;
    //     $this->accountType = $accountType;
    //     $this->interestRate = $interestRate;
    // }

   

    

