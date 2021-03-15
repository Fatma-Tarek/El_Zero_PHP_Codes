<?php
//=================================================================================
// Request : $_REQUEST['username']; same as $_POST['username'];
//===========================================================================================

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
		<input type="text" name="username">
		<input type="password" name="pass">
		<input type="submit" value="login">
</form>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		echo $_SERVER['REQUEST_METHOD'];
		echo "<br>";
		
		echo $_REQUEST['username'];
		echo "<br>";
		
		echo $_POST['username'];
		echo "<br>";
	}