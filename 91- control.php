<?php
session_start();
if(isset($_SESSION['user']))
{
	echo 'welcome ' .$_SESSION['user'].' You are Admin';
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
}else{
	echo "You are Not permitted to this page";
}
