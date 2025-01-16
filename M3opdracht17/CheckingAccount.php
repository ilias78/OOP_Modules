<?php





class CheckingAccount extends BankAccount
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, "checking");
        $this->overdraftLimit = $overdraftLimit;
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





















   
