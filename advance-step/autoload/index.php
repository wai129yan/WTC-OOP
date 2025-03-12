<?php 

include "autoload.php";

$user = new Schoolclass(new Classtime,new Student);

$user->getTime();
echo "<br>";
$user->getStudent();
echo "<br>";
$user->getPlayTime();

// 1 khu htet po 3 lo ya lar? => 4-5 khu

