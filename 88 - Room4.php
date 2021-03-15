<?php
session_start();
echo "Your favourite food is ". $_SESSION['favfood'];
echo "<br>";
echo "<a href='89 - Destroy Session.php'>Log out</a>";