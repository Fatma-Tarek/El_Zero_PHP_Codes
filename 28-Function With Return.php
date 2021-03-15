<?php
//========================= Notes =============================
// If you no write return so it's null even if you write echo 
//=============================================================

function sayHi()
{
	echo "say Hello";
}

sayHi();
echo "<br>";
var_dump(sayHi());
echo "<br>";
//============================================================
function sayHi1()
{
	
}

function sayHi2()
{
	return ;
}


function sayHi3()
{
	return NULL;
}

var_dump(sayHi1(),sayHi2(),sayHi3());
echo "<br>";
//============================================================


function calculateAge($age)
{
	$result = $age * 365;
	return $result;
}

echo calculateAge(24);