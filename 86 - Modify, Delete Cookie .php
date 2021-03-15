<?php
//============================================================
// 86 Modify, Delete Cookie 
// To delete Cookie
//	setcookie('Background',"",time() - 3600,"/"); 
// Notice that is not  "" in value of cookie and time by -
// to delete cookie 
//============================================================
///$mainColor ="#000";
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$maincolor = $_POST['color'];
	// set cookie lais leha value unless it came from $_SERVER request 
	setcookie("Background","555", time() + 3600, '/',"localhost"); // something wrong with this What Fucken Happened !!!!!!!!1
	//setcookie("Facebook","Trial",time()+86400,"/","localhost");
	// To delete Cookie
//	setcookie('Background',"",time() - 3600,"/");
	echo "1111 <pre>";
	print_r($_POST['color']);
	print_r($maincolor);
	print_r($_COOKIE);
	print_r($_COOKIE['Background']);
	echo "</pre>";
	
}

if(isset($_COOKIE['Background']))
{
	$body = $_COOKIE['Background'];
	echo "<pre>";
	print_r($_COOKIE['Background']);
	echo "</pre>";

}else{
//	$body = $mainColor;
	$body = 000;
}

print_r($body);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Modify Cookie</title>
</head>

<body style="background-color: #FFF"> 

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
		<input type="color" name="color">
<!--			<input type="text" name="color">-->
		<input type="submit" value="choose">
	</form>
</body>

</html>
