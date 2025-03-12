<?php 

class StripePayment implements Payment
{
    public function payNow($amount)
    {
        echo "Payment has been made using Stripe " .  $amount .". <br>";
    }
}