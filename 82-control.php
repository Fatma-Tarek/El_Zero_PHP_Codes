<?php

echo "Your name is " . $_POST['username'] ."<br>";
echo "Your password is " . $_POST['pass'] ."<br>";


$admins = array("Fatma", "Tarek","Abdallah");

$userName = $_POST['username'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
		if(in_array($userName,$admins)){
			echo "Welcom " . $_POST['username']. "To control Panel  For Admin";	
		}else
		{
			echo "Sorry This User name not Exist";
		}
}else{
	echo " You cannot open page Directory ";
}