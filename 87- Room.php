<?php
//Resume The Session 

session_start(); // Start or Resume session 

echo 'Hello ' .$_SESSION['username'] . ' How are you? <br>';
echo 'Your Favourite Fodd is '. $_SESSION['favFood'];