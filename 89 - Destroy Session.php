<?php
//==================================================================================
// Destroy Session.php
//==================================================================================

session_start();
// Clear data in super global session 
session_unset();
// Unset
session_destroy();

echo "<pre>";
print_r($_SESSION);
print_r("bye");
echo "</pre>";