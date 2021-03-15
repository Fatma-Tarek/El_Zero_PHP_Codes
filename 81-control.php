<?php

echo "Your name is " . $_GET['username'] ."<br>";
echo "Your password is " . $_GET['pass'] ."<br>";


$admins = array("Fatma", "Tarek","Abdallah");

$userName = $_GET['username'];

if(in_array($userName,$admins)){
	echo "Welcom " . $_GET['username']. "To control Panel  For Admin";	
}else
{
	echo "Sorry This User name not Exist";
}