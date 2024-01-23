<?php


class Bank
{
    public string $accountName;
    readonly public int $age;
    protected bool $activeAccount;
    protected int $ballance;
    protected int $witdraw;
    private string $pinAccount;


    function __construct(string $name, int $age)
    {
        $this->accountName = $name;
        $this->age = $age;
    }
    function identity()
    {
        echo "Account Name :" . $this->accountName . PHP_EOL;
        echo "Age :" . $this->age . PHP_EOL;
    }
}


class Deposito extends Bank
{
    public int $interestRate;

    function __construct(string $accountName, int $age, int $interest)
    {

        parent::__construct($accountName,  $age);
        $this->interestRate = $interest;
    }

    function status()
    {
        echo "Deposito Customer is " . $this->accountName .  PHP_EOL;

        echo "Interest is " . $this->interestRate .  PHP_EOL;
    }
}
