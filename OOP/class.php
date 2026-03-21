<?php
declare(strict_types=1);
class Account{
    private $accountNumber;

    public function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }

}
class BankAccount{
    
    private float $balance;

    public function __construct(float $balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance;
    }

    private function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
        return $this;
    }
    private function withdraw($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function transaction($amount , $type){
        if($type === "deposit"){
            return $this->deposit($amount);
        } elseif($type === "withdraw") {
            return $this->withdraw($amount);
        }
    }

}

class SavingAccount extends BankAccount{
    private $interestRate;

    public function __construct($balance , $interestRate){
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function getInterestRate(){
        return $this->interestRate;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addInterest(){
        $interest = $this->getbalance() * ($this->interestRate / 100);
        $this->transaction($interest, "deposit");
    }
}

class CheckingAccount extends BankAccount{
    private $minBalance;

    public function __construct($balance , $minBalance){
        parent::__construct($balance);
        $this->minBalance = $minBalance;
    }

    public function withdraw($amount){
        if($amount > 0 && ($this->getBalance() - $this->minBalance) >= $amount){
            $this->transaction($amount, "withdraw");
            return true;
        }
        return false;
    }

    public function getMinBalance(){
        return $this->minBalance;
    }
}

class Customer{
    private $name;
    private $email;
    private $phone;
    private $address;
    private $accounts = [];

    public function __construct($name,$email,$phone,$address){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->accounts = [];

    }

    public function openAccount($account, $bankAccount){
        $this->accounts[] = ['account' => $account, 'bankAccount' => $bankAccount];
    }

    public function closeAccount($accountToClose){
        foreach($this->accounts as $index => $accountData){
            if($accountData['account']->getAccountNumber() === $accountToClose->getAccountNumber()){
                unset($this->accounts[$index]);
                return true;
            }
        }
        return false;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getAddress(){
        return $this->address;
    }
}

class Bank{
    private $customers;

    public function __construct(){
        $this->customers = [];
    }

    public function getCustomers(){
        return $this->customers;
    }

    public function addCustomer($customer){
        $this->customers[] = $customer;
    }
}