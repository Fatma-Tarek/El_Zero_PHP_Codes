<?php
//================= Logical operator ==========================
//	
//	[ and ] condition1 and condition2
//	
//	[  && ] condition1 and condition2
//	
//	[ xor ]  odd condition is true so it execute true condition 
//
// 	[  or ]  one conduction of more 
//
// 	[  || ]  one conduction of more  //Use it not or 
//
// 	[  !  ]  Not
//=============================================================

$age = 25;
$skillYears = 5;
$haveCar = "Yes";

if($age >20 and $skillYears >10 and $haveCar === "Yes")
{
	echo "Accepted <br>";		
}
else if($age >28 and $skillYears >4 and $haveCar === "Yes")
{
	echo "Accepted VIP 1<br>";	
}
else if($age < 28 and $skillYears >4 and $haveCar === "Yes")
{
	echo "Accepted VIP 2<br>";	
}


$age = 30;
$skillYears = 5;
$haveCar = "Yes";

if($age >25 &&  $skillYears >3 &&  $haveCar === "Yes")
{
	echo "Accepted <br>";		
}
else if($age >28 &&  $skillYears >4 &&  $haveCar === "Yes")
{
	echo "Accepted VIP 1<br>";	
}
else if($age <28 &&  $skillYears >4 &&  $haveCar === "Yes")
{
	echo "Accepted VIP 2<br>";	
}
//===================================================
// 		USE &&  instead of and 
// 		show results 
//===================================================

$var1 =true && false;
$var2 =true and false;
$var2 =false and true;
var_dump($var1,$var2);
echo "<br>";
//===================================================
// 						USE of XOR
//===================================================
$age = 30;
$skillYears =4;
$name ="fatma";
if ($age >28 xor $skillYears >5)
{
	echo " Accepted from Xor <br>";
}
if ($age >28 xor $skillYears >3 xor $name ="fatma")
{
	echo " Accepted from Xor2 <br>";
}


//===================================================
// 						USE of OR
//===================================================
$age = 30;
$skillYears =4;
$name ="fatma";
if ($age >28 or $skillYears >5)
{
	echo " Accepted from OR <br>";
}
if ($age > 28 or $skillYears <3 or $name ="fama")
{
	echo " Accepted from OR2 <br>";
}


//===================================================
// 						USE of NOT
//===================================================
$var ="fatma";
if ( $var )
{
	echo "existed <br>";
}
/**********************************/
if ( !$var ) ///check is existed or no 
{
	echo "existed 2 <br>";
}
/**********************************/
if ( !$vaar)
{
	echo "not existed <br>";
}

