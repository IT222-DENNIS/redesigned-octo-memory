<?php

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
    

    private $balance;

    public function __construct($balance){
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

class Customer{
    private $name;
    private $email;
    private $phone;
    private $address;

    public function __construct($name,$email,$phone,$address){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;

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

    // public function setName($name){
    //     $name = trim($name);

    //     if($name === ""){
    //         return false;
    //     }
    //     $this->name = $name;
    //     return true;
    // }

    // public function setEmail($email){
    //     return $this->email = $email;
    // }

    // public function setPhone($phone){
    //     return $this->phone = $phone;
    // }

    // public function setAddress($address){
    //     return $this->address = $address;
    // }
}