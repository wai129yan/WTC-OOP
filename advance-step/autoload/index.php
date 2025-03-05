<?php 

include "autoload.php";

$user = new Schoolclass(new Classtime,new Student);

$user->getTime();
$user->getStudent();