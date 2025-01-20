<?php

namespace M3opdracht19;

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


   

    // public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType, float $interestRate)
    // {
    //     $this->accountNumber = $accountNumber;
    //     $this->accountHolder = $accountHolder;
    //     $this->balance = $balance;
    //     $this->accountType = $accountType;
    //     $this->interestRate = $interestRate;
    // }

   

    
}
