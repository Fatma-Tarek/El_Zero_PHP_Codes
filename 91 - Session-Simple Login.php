<?php

session_start();
$admins =array("Fatma","Tarek");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//	echo $_POST['username'];
	if(in_array($_POST['username'],$admins))
	{
		$_SESSION['user'] = $_POST['username'];
		echo "Hello ".$_SESSION['user'];
		echo "<br>";
		header('REFRESH:5;URL=91- control.php');
	}else{
		echo "Sorry you are not admin ";
	}
	
}else{
	
	echo 'Error: You can\'t open this form directoly';
}