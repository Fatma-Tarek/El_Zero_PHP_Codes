<?php
//======================================================================================
// Predefined Variables - Server
// 
// $_SERVER  : super global 
//======================================================================================


echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo $_SERVER['SERVER_ADDR'];
echo "<br>";


echo $_SERVER['SERVER_NAME'];
echo "<br>";
if ($_SERVER['SERVER_NAME'] == 'localhost')
{
	echo "Your IP is 172.0.0.1";
	echo "<br>";
}

echo $_SERVER['QUERY_STRING'];
echo "<br>";
//=============================== IMPORTANT =========================================
//===============================================================================
echo $_SERVER['HTTP_REFERER']; // traffic source 
echo "<br>";

echo $_SERVER['SERVER_PORT']; // traffic source 
echo "<br>";

var_dump($_SERVER['PHP_SELF']);
echo "<br>";

?>

<!--send form to myself-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Click </a> 
