<?php

class Bank
{
    public $accountName = "";
    public $ballance = 0;
    public $pin = "";


    // --constructor= fungsi ynag digunakan untuk membangun clas tersendiri
    // dipanggil saat membuat object 

    function __construct($ACCOUNTNAME, $BALLANCE, $PIN)
    {
        $this->accountName = $ACCOUNTNAME;
        $this->ballance = $BALLANCE;
        $this->pin = $PIN;
    }


    function debit($ammount)
    {

        if ($this->ballance > $ammount) {
            echo "Debit processed" . PHP_EOL;
        } else {
            echo "Insufficient" . PHP_EOL;
        }
    }


    function info()
    {
        echo "Account name is " . $this->accountName . PHP_EOL;
        echo "Balance Rp : " . $this->ballance . PHP_EOL;
    }

    function __destruct()
    {
        echo "Finish";
    }
}
