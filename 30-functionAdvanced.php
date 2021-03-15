<?php
//================= Default Values ======================

function sayHello($userName ,$age="Unkown" ,$skill=2)
{
	$result ="Hello " .$userName . " Your age is ".$age ." and your skill = ".$skill."<br>";
	return $result;
} 

echo sayHello("Fatma");
echo sayHello("Tarek",50);
echo sayHello("Omran",21,5);

//============================================================
/*
	[ 1 ] Functuion with argument 
	[ 2 ] Functuion inside function 
	[ 3 ] If,else condition 
	[ 4 ] comparison operators
	[ 5 ] Concatentation 
    [ 6 ] String Operators
	[ 7 ] Function Return 

*/

$nameOfFile = "Advanced Function";

function getTicket($name,$age)
{
	$ticket = rand (5000,100000);
	
	if ($age >30)
	{
		$msg = "Hello ".$name ." Your age is ". $age."<br>";;
		$msg .= "You are Qualified to get A Ticket Congratz :)"."<br>";
		$msg .= "Your ID is [ <span>" .$ticket ."</span> ]";
		
	}
	else {
		$msg = "Hello ".$name ." Your age is ". $age ."<br>";
		$msg .= "You are not  Qualified to get A Ticket sorry :(" ."<br>";
	
	}
	return $msg;
}
//$id = getTicket("Fatma",31);
//echo $id;

function makeFrame( $element )
{
//	$frame = "<div class= 'nice-frame'>";
//	$frame .=$element;
//	$frame .= "</div>";
	$frame =" <div class ='nice-frame'>". $element ."</div>";
	return $frame;
}

//$myElement =  makeFrame( "fatma");


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $nameOfFile; ?> </title>
	<style>
		.nice-frame {
			padding: 20px;
			text-align: center;
			width: 400px;
			margin: 30px auto; /*margin bet two div and in center*/
			border-radius: 10px;
			background-color: #EEE;
			border: 1px solid #CCC;
			font-family: Toma, Arial;
			line-height:2;  /*spaces between lines */
		}
		.nice-frame span{
			font-weight: bold;
			color:red;
		}

	</style>
</head>

<body>
	<?php echo makeFrame(getTicket("Tarek",20));?>
	<?php echo makeFrame(getTicket("Tarek",40));?>
	<!--	<?php echo $myElement; ?>-->
</body>

</html>
