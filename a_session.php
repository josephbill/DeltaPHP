<?php
session_start(); //first step , intialize ur session

//set up a session

$_SESSION['favColor'] = "Blue";
$_SESSION['favCar'] = "BMW";

echo "session created";


?>