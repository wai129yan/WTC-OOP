<!-- index.php or controller code -->
<?php

include './autoload.php';

$credit = new CreditCard();  // Can switch to CreditCardPayment or StripePayment
$credit->payNow(100);

$stripe = new StripePayment();
$stripe->payNow(200);

// $paymentMethod = new CreditCardPayment();
// $paymentMethod->processPayment(50);

// $paymentMethod = new StripePayment();
// $paymentMethod->processPayment(200);
