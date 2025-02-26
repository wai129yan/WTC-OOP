<?php

abstract class PaymentGateway
{
    abstract public function processPayment ($amount);

    public function validateTransaction ()
   {
    echo "Transaction validated";
   } 
}

class Paypal extends PaymentGateway
{
    public function validateTransaction()
    {
        echo "Paypal transaction validated";
    }

    public function processPayment($amount)
    {
        echo "Paypal payment processed for amount $amount";
    }
    
}

class Stripe extends PaymentGateway
{
    public function validateTransaction()
    {
        echo "Stripe transaction validated";
    }

    public function processPayment($amount)
    {
        echo "Stripe payment processed for amount $amount";
    }
}

$paypal = new Paypal();
echo $paypal->validateTransaction();
echo "<br>";
echo $paypal->processPayment(100);
echo "<br>";

$stripe = new Stripe();
echo $stripe->validateTransaction();