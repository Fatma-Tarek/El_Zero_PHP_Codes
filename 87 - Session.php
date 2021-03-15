<?php
//===========================================================================================================================================================
// Session Must use session save your setting on server 
// unlike cookie save your setting on your machine 
// Session must be before html okaaaaaaaaaaaay :)))
//===========================================================================================================================================================

session_start(); // Start or Resume Session 
// Global Variable

$_SESSION['username'] ="Fatma";
$_SESSION['favFood'] = "Pizza";

echo "<a href ='87- Room.php'>Click</a>";