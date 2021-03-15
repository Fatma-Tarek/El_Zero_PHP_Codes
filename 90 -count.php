<?php
session_start();
require_once "90 -counter.php";
echo "How are you ". $_SESSION['name']."?<br>";
echo "you visited us ". $_SESSION['counter']. " times";
echo "<a href='90 - Session Simple Counter.php'>Home</a>";