<?php

class Payment 
{
    public function processPayment()
    {
        echo "Processing payment";
    }
}

class CashPayment extends Payment
{
    public function processPayment()
    {
        echo "Processing cash payment";
    }
}

class PaypalPayment extends Payment
{
    public function processPayment()
    {
        echo "Processing paypal payment";
    }
}

$creditPay = new Payment();
$creditPay->processPayment();

echo "<br>";

$cashPay = new CashPayment();
$cashPay->processPayment();