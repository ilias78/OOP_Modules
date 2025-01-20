<?php

namespace M3opdracht20;

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
} 

public function withdraw(float $amount): string
{
    if($this->validateWithdrawal($amount)){
       
        return parent:: withdraw($amount);
    } 
        return "Je hebt onvoldoende geld om dit bedrag op te nemen";
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

    


