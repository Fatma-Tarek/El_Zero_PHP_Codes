<?php
//session_start();
if(empty($_SESSION['counter']))
{
	$_SESSION['counter'] =1;
}else{
	$_SESSION['counter']++;
}
echo "Hello " .$_SESSION['name'] ."You visited us " .$_SESSION['counter']. 'times';