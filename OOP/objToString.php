<?php

/*==========================================================================

The __toString() is one of a magic method in PHP. 
The following shows the syntax of the __toString() method:
public function __toString ( ) : string
The __toString() method accepts no parameter and returns a string.

=======================================================================*/

class BankAccount
{
    private $accountNumber;

    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function __toString()
    {
        return "Bank Account: $this->accountNumber. Balance: $$this->balance";
    }
}


$account = new BankAccount('123456789', 100);
echo $account;
