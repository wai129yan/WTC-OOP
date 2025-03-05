<?php

abstract class Music 
{
    public function song()
    {
        return "Hello New Song";
    }

    //rule
    abstract public function play();
    abstract public function pause();
    abstract public function stop();
    abstract public function previous();
    abstract public function next();

    // $n = new Music();
    // echo $n->song();


}

 class Song extends Music
{
    public function play()
    {
        echo "hello play";
    }
    public function pause() 
    {
        echo "hello pause";
    }

    public function previous()
    {
        echo "hello previous";
    }

    public function next()
    {
        echo "hello next";
    }
    public function stop()
    {
        echo "hello stop";
    }

}


$aa = new Song();
echo $aa->song();

$aa->play();
$aa->pause();
$aa->stop();
$aa->next();

