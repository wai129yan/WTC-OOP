<?php

class CreditCard implements Payment
{
    public function payNow($amount)
    {
        echo "Payment has been made using Credit Card " .  $amount .". <br>";
    }
}