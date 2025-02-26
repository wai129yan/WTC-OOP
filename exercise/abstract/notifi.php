<?php

abstract class Notification 
{
    abstract public function send($to,$message);
}

class EmailNotification extends Notification
{
    public function send($to,$message)
    {
        echo "Email sent to $to with message: $message";
    }
}

class SMSNotification extends Notification
{
    public function send ($to,$message)
    {
        echo "SMS sent to $to with message: $message";
    }
}

$email = new EmailNotification();
echo $email->send("Today is Holiday","Happy Holiday");
echo "<br>";

$sms = new SMSNotification();
echo $sms->send("Today is Holiday","Happy Holiday");
echo "<br>";