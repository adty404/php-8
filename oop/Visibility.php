<?php

require_once "data/Shipping.php";

$shipping = new Shipping("Achmad Fauzi", "Jakarta", "08120000000", 25000);

// cara access secara sederhana ( jika private akan tidak bisa di akses )
echo $shipping->address . PHP_EOL;

// cara access private dari luar class
echo $shipping->getTransactionContact() . PHP_EOL;

// mengakses return dari sebuah child class
$customer = new Customer("Achmad Fauzi", "Jakarta", "08120000000", 25000);
$customer->detail();