<?php 
/*
Comparison operators 
[ == ] Equals

[ != ] Not Equals

[ <> ] Not Equals

[ === ] Identical 

[ !== ] Not Identical 

[ < ] less than

[ <= ] less than

[ > ] less than

[ >= ] less than

*/

$a = 100;
$b = 200;

if($a == $b)
{
	echo "true <br>";
}
else 
{
	echo "false <br>";
}
//=================================
if($a == $c)
{
	echo "Yes ";
}
else 
{
	echo "false != <br>";
}
//=================================
// AlwaysTrue                    ==
//=================================
if($a = $b)
{
	echo "true <br>";
}
else 
{
	echo "false <br>";
}

//=================================
$a = 100;
$b = 200;
$c = "100";
echo gettype($a) . "<br>" .gettype ($b) . "<br>";
if($a === $b)
{
	echo "true <br>";
}
else 
{
	echo "false <br>";
}
//===========================
if($a === $c)
{
	echo "true <br>";
}
else 
{
	echo "false <br>";
}
//=================================
if($a != $b)
{
	echo "true != <br>";
}
else 
{
	echo "false != <br>";
}
//=================================
if($a !== $c)
{
	echo "Yes ". $a . " Not Equal " . $b ."<br>
	";
	echo "because \$a Is " . gettype($a) ."<br>";
	echo "And \$c Is " . gettype($c) ."<br>";
}
else 
{
	echo "false != <br>";
}
//=================================
if($a <> $b)
{
	echo "Yes <br>";
}
else 
{
	echo "false != <br>";
}

//=================================
if($a <= $b)
{
	echo "Yes <br>";
}
else 
{
	echo "false != <br>";
}
//=================================
if($a >= $b)
{
	echo "Yes <br>";
}
else 
{
	echo "false != <br>";
}








