<?php

namespace M3opdracht19;

class SavingsAccount extends BankAccount
{
   
 private float $interestRate;

 public function setType(): void
 {
     $this->accountType = "savings";
 }

 public function  setInterestRate( float $interestRate)
 {
     $this->interestRate = $interestRate;

    // public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType, float $interestRate)
    // {
    //     $this->accountNumber = $accountNumber;
    //     $this->accountHolder = $accountHolder;
    //     $this->balance = $balance;
    //     $this->accountType = $accountType;
    //     $this->interestRate = $interestRate;
    // }

    
} 
}
