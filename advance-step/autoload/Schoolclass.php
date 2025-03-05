<?php 

class Schoolclass 
{
    private $student;
    private $classtime;
    public function __construct(Classtime $classtime , Student $student)
    {
        $this->student = $student;
        $this->classtime = $classtime;
    }

    public function getTime()
    {
        echo $this->classtime->time();
    }

    public function getStudent()
    {
        echo  $this->student->student();
    }
}