<?php

class Shipping
{
    // menggunakan fitur dari constructor propert promotion
    public function __construct(public string $name,
                                public string $address,
                                protected string $contact,
                                private int $total_transaction)
    {

    }

    // untuk membuat sebuah property private dapat di access dari luar
    public function getTransactionContact()
    {
        return $this->contact;
    }

    // public function getTransactionTotal()
    // {
    //     return $this->total_transaction;
    // }
}

// untuk protected
class Customer extends Shipping
{
    public function detail()
    {
        echo "Contact : $this->contact" . PHP_EOL;
    }
}
